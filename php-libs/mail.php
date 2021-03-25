<?php
use PHPMailer\PHPMailer\PHPMailer;
require "phpmailer/vendor/autoload.php";

$mail = new PHPMailer(true);

$mail->setLanguage("ru");
$mail->CharSet = "UTF-8";

//Server settings
// $mail->SMTPDebug = 4;                                 
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = '#';
$mail->Password   = '#';
$mail->Port = 587;                                              
$mail->From = "#";
$mail->FromName = "#";

//Recipients
$recipients = array(
	"#" => "Dev",
	"#" => "geliosfera",
);

$mail->isHTML(true);

if($_POST['place']=='форма cвяжитесь с нами'){
	//cвяжитесь с нами
	$formdata = array(
		"name" => "Имя",
		"phone" => "Телефон",
		"email" => "Email",
		"textarea" => "Сообщение",
		"place" => "Форма",
		"page" => "Страница",
		"utm" => "UTM",
		"form__news" => "Согласен на рассылку?"
	);
}
elseif($_POST['place']=='отправка резюме'){
	//Резюме
	$formdata = array(
		"name" => "Имя",
		"want_name_org_post" => "Желаемая должность",
		"email" => "Email",
		"phone" => "Телефон",
		"textarea" => "Сообщение",
		"place" => "Форма",
		"page" => "Страница",
		"utm" => "UTM",
		"form__news" => "Согласен на рассылку?"
	);
}
elseif($_POST['place']=='оформление заказа'){
//Оформление заказа
	$formdata = array(
		"name_org" => 'Название организации',
		"name_org_contact" => 'Контактное лицо',
		"name_org_post" => 'Должность',
		"email" => "Email",
		"phone" => "Телефон",
		"product" => 'Продукт',
		"count_product" => 'Количество изделий',
		"textarea" => "Сообщение",
		"place" => "Форма",
		"page" => "Страница",
		"utm" => "UTM",
		"form__news" => "Согласен на рассылку?"
	);
}
else{
	$formdata = array(
		"name" => "Имя",
		"phone" => "Телефон",
		"email" => "Email",
		"textarea" => "Сообщение",
		"place" => "Форма",
		"page" => "Страница",
		"utm" => "UTM",
		"form__news" => "Согласен на рассылку?");
}

/**
 * # Письмо
 */
$mail->Subject = "Новая заявка на " . $_POST["place"];

/**
 * В дублируемые поля записываем аналогичные значения, чтобы не создавать их в битриксе
 */
// if ( $_POST['calculator-nisha'] != "" || !empty( $_POST['calculator-nisha'] ) ) {
// 	$_POST['activity'] = $_POST['calculator-nisha'];
// }

// if ( $_POST['calculator-calc-numleads'] != "" || !empty( $_POST['calculator-calc-numleads'] ) ) {
// 	$_POST['numleads'] = $_POST['calculator-calc-numleads'];
// }

// if ( $_POST['calculator-calc-budget'] != "" || !empty( $_POST['calculator-calc-budget'] ) ) {
// 	$_POST['budget'] = $_POST['calculator-calc-budget'];
// }


/**
 * # Отправка заявок в Telegram
 */
// $token = "625021387:AAG_2olNHW-oMw_53X00pvd4FzWvqlCNiFI";
// $chat_id = "-295740600";

// foreach ($formdata as $formitem => $title) {
// 	if( array_key_exists( $formitem, $_POST ) && !empty( trim( $_POST[$formitem] ) ) ) {
// 		$txt .= "<b>".$title.":</b> ".trim( $_POST[$formitem] )."%0A";
// 	}
// };

// $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&disable_web_page_preview=true&parse_mode=html&text={$txt}","r");

/**
 * # Отправка заявок в Bitrix24
 */

// // Создаем из основного массива массив для отправки в Bitrix
// $bitrixArrayKeys = array_keys( $formdata );
// $bitrixArray = array_fill_keys( $bitrixArrayKeys, array() );

// Стили для таблицы в форме заявки, которая приходит на почту
$table_style = "style='width:100%;border-collapse: collapse;'";
$td_style = "style='padding:10px;border: #e9e9e9 1px solid;font-size:20px;'";

// If file was attached
$attachments = $_FILES['attach_file'];
$file_count = count($attachments['name']); //count total files attached

if ( $file_count > 0 ) {
	for ( $i = 0; $i < $file_count; $i++ ){
		$mail->addAttachment($attachments['tmp_name'][$i], $attachments['name'][$i]);
	}
}

if($_POST['form__news']=='Да'){

	$list = array (
		array($_POST['name'], $_POST['email'], $_POST['phone'])
	);
	$FilePath = $_SERVER['DOCUMENT_ROOT'].'/php-libs/file.csv';
	$fp = fopen($FilePath, 'a');
	foreach ($list as $fields) {
		fputcsv($fp, $fields);
	}

	fclose($fp);

}
// Начало письма
$mail->Body .= "<table $table_style>";

// Сбор всех полей форм
foreach ($formdata as $formitem => $title) {
	for ($i=0; $i < count($_POST); $i++) { 
		if( array_key_exists( $formitem, $_POST ) && !empty( trim( $_POST[$formitem] ) ) ) {
			$mail->Body .= "<tr style='background-color: #f8f8f8;'>
			<td ". $td_style ."><b>".$title."</b></td>
			<td ". $td_style .">". trim( $_POST[$formitem] ) ."</td>
			</tr>";

			$bitrixArray[$formitem] = $_POST[$formitem];
			break;
		} else {
			$bitrixArray[$formitem] = "";
		}
	}
}

// Конец письма
$mail->Body .= "</table>";

//Sending emails
foreach( $recipients as $email => $name ) {
	$mail->addAddress($email, $name);
	if( !$mail->send() ) {
		echo "Ошибка: " . $mail->ErrorInfo;
	}
	$mail->clearAddresses();
}
echo "done";

// echo '<pre>'; print_r($bitrixArray); echo '</pre>';

// add_lead_to_bitrix24( 
// 	$bitrixArray["type_lead"], 
// 	$bitrixArray["phone"],  
// 	$bitrixArray["activity"],
// 	$bitrixArray["numleads"],
// 	$bitrixArray["budget"],
// 	$bitrixArray["calculator-url"],
// 	$bitrixArray["place"],
// 	$bitrixArray["comment"],
// 	$bitrixArray["utm"]
// );

?>