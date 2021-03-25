 arrfiles=[];

 var formSend = function($) {

  // $.validator.methods.url = function (value, element, param) {
  //   return this.optional( element ) || /[a-z]\.[a-z]+/.test( value );
  // }

  /*
  * SEND FORM
  */
 $('.form').each(function() {  // attach to all form elements on page\
  var thisForm = $(this);
  $(thisForm).validate({
    rules: {
      phone: {
        required: true,
        minlength: 4
      },
      email: {
        pattern: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
      },
      attach_file: {
        extension: "jpg|doc|docx|xsl|xslx|txt|pdf"
      }
    },
    messages: {
      phone: {
        required: "Введите корректный телефон",
        minlength: "Телефон не может быть менее 4-х цифр"
      },
      name: {
        required: "Введите Ваше имя"
      },
      email: {
        required: "Введите корректный e-mail",
        email: "Введите корректный e-mail",
        pattern: "Введите корректный e-mail"
      },
      form__checkbox: {
        required: "Для оформления заказа необходимо согласие с с условиями Политики конфиденциальности"
      },
      want_name_org_post:{
        required: "Укажите желаемую должность"
      },
      name_org: {
        required: "Введите название Вашей организации"
      },
      name_org_contact: {
        required: "Введите контактное лицо Вашей организации"
      },
      name_org_post: {
        required: "Укажите должность"
      },
      attach_file: {
        required: "Вы не загрузили файл",
        extension: "Неверный формат"
      }
    },
    errorPlacement: function(error, element) {
      if ( element.attr("name") == "attach_file" ) {  
        error.appendTo(".uploadfileError");
      } else {
        error.insertAfter(element);
      }
    },
    submitHandler: function() { 
      var th = $(thisForm);

      var form_data = new FormData();
      var place_name = th.find('input[name=name]').val();
      var place_phone = th.find('input[name=phone]').val();
      var place_email = th.find('input[name=email]').val();
      var place_textarea = th.find('textarea[name=textarea]').val();
      var place_field = th.find('input[name=place]').val();
      var place_page = th.find('input[name=page]').val();
      var place_utm = th.find('input[name=utm]').val();
      var place_form__news = (th.find('input[name=form__news]').prop('checked') ? 'Да' : 'Нет');
      var place_want_name_org_post = th.find('input[name=want_name_org_post]').val();
      var place_name_org = th.find('input[name=name_org]').val();
      var place_name_org_contact = th.find('input[name=name_org_contact]').val();
      var place_name_org_post = th.find('input[name=name_org_post]').val();
      var place_product = th.find('select[name=product]').val();
      var place_count_product = th.find('input[name=count_product]').val();

      form_data.append("name", place_name);
      form_data.append("phone", place_phone);
      form_data.append("email", place_email);
      form_data.append("textarea", place_textarea);
      form_data.append("place", place_field);
      form_data.append("page", place_page);
      form_data.append("utm", place_utm);
      form_data.append("form__news", place_form__news);
      form_data.append("want_name_org_post", place_want_name_org_post);
      form_data.append("name_org", place_name_org);
      form_data.append("name_org_contact", place_name_org_contact);
      form_data.append("name_org_post", place_name_org_post);
      form_data.append("product", place_product);
      form_data.append("count_product", place_count_product);


      if( arrfiles ) {
        for(var i = 0; i < arrfiles.length; i++) {
          form_data.append('attach_file[]', arrfiles[i]);    
        }
      }


      var btn = $(th).find('.form__btn');

        //Блокируем кнопку от повторного нажатия
        btn.attr('disabled','disabled');
        
        // Сохраняем текст в переменную
        var textBtn = btn.html();
        btn.html('Подождите, идет отправка...');
        $.ajax({
          type: "POST",
          url: "/php-libs/mail.php",
          contentType: false,
          processData: false,
          data: form_data
        }).done(function(data) {
          if (data == "done") {
            if(thisForm.is("#formorder")){
              thanks='#thankyouorder';
            }
            else if(thisForm.is("#formvacansy")){
              thanks='#thankyouvacansy';
            }
            else{
              thanks='#thankyou';
            }
            $.magnificPopup.open({
             items: {
               src: thanks,
             },
             tClose: 'Закрыть',
             closeBtnInside: true,
             tLoading: 'Загрузка...',
             removalDelay: 300,
             mainClass: 'my-mfp-slide-bottom',
           });

            th.trigger("reset");

            //Разблокируем кнопку
            btn.removeAttr('disabled');
            //Вставляем прошлый текст на кнопку
            btn.html(textBtn);

          } else {
            alert("Ошибка при отправке! Попробуйте снова...");
          }          
        });
      }
    });
});
}

function clickBackButMob($){
  $('.navMobile__arrow--back').on('click', function(){
    $('.navbar-toggler').trigger('click');
  })
}

function MouseDrag($){
  if (screen.width>1200) {
    if($('#frontpage-stones-wrap').length){
      var scene = document.getElementById('frontpage-stones-wrap');
      var parallaxInstance = new Parallax(scene, {
        relativeInput: true
      });
    }
  }
}

function fullpage($){

  $fn=$('#frontpage-pagepiling');

  if (screen.width>1200) {
    if($fn.length){
      var deleteLog = false;
      const pagepiling_setting = {
       menu: null,
       direction: 'vertical',
       verticalCentered: true,
       scrollingSpeed: 1,
       easing: 'swing',
       loopBottom: false,
       loopTop: false,
       css3: true,
       scrollBar: true,
       navigation: {
        'textColor': '#fff',
        'bulletsColor': '#000',
        'position': 'right',
        'tooltips': ['01', '02', '03', '04', '05']
      },
      normalScrollElements: null,
      normalScrollElementTouchThreshold: 1,
      touchSensitivity: 1,
      keyboardScrolling: true,
      sectionSelector: '.section',
      animateAnchor: false,
      afterLoad: function(anchorLink, index){
        $('.section-' + index + ' .frontpage-main__text-inner').addClass('animate__animated').addClass('animate__fadeInUp');
      },
      onLeave: function(index, nextIndex, direction){
       $('.section-' + index + ' .frontpage-main__text-inner').removeClass('animate__animated').removeClass('animate__fadeInUp');
     }
   }
   $fn.pagepiling(pagepiling_setting);
   $('.frontpage-main__arrow-bottom img').on('click', function(fn){
    $fn.pagepiling.moveSectionDown();
  })
   $('#pp-nav li').each(function (index, element) {
    var tooltip = $(this).data('tooltip');
    $('<div class="pp-tooltip right" style="">' + tooltip + '</div>').hide().appendTo($(this)).fadeIn(200);
  })
 }
}
}

function frontpagecanvas(){
	var sun = new Image();
	var moon = new Image();
	var earth = new Image();
	function init() {
		sun.src = '';
		moon.src = 'https://mdn.mozillademos.org/files/1443/Canvas_moon.png';
		earth.src = 'https://mdn.mozillademos.org/files/1429/Canvas_earth.png';
		window.requestAnimationFrame(draw);
	}

	function draw() {
		var ctx = document.getElementById('canvas').getContext('2d');

		canvas.width = document.body.clientWidth;
		canvas.height = document.body.clientHeight;
		canvasW = 300;
		canvasH = 300;

		ctx.globalCompositeOperation = 'destination-over';
		ctx.clearRect(0, 0, canvasW, canvasH);

		ctx.fillStyle = 'rgba(0, 0, 0, 0.4)';
		ctx.strokeStyle = 'rgba(0, 153, 255, 0.4)';
		ctx.save();
		ctx.translate(canvasW/2, canvasH/2);

  // Earth
  var time = new Date();
  ctx.rotate(((2 * Math.PI) / 60) * time.getSeconds() + ((2 * Math.PI) / 60000) * time.getMilliseconds());
  ctx.translate(105, 0);
  ctx.drawImage(earth, -12, -12);

  ctx.translate(-105, 0);

  var time2 = new Date();
  ctx.rotate(((2 * Math.PI) / 2) * time2.getSeconds() - ((20 * Math.PI) / 20000) * time2.getMilliseconds());
  ctx.translate(70, 0);
  ctx.drawImage(earth, -12, -12);


  ctx.restore();
  
  ctx.beginPath();
  ctx.arc(150, 150, 105, 0, Math.PI * 2, false); // Earth orbit
  ctx.stroke();
  ctx.closePath();

  ctx.beginPath();
  ctx.arc(150, 150, 70, 0, Math.PI * 2, false); // Earth orbit
  ctx.stroke();

  ctx.drawImage(sun, 0, 0, 800, 800);

  window.requestAnimationFrame(draw);
}

init();
}

function togglCatSideb($){
  //dekstop submenu  at sinlge products page and categoria pages
  $('.category-page__aside-img--arrow').on('click', function(){
    $('.category-page__aside-part').removeClass('open');
    $('.category-page__aside-part').addClass('cancel');
  })
  $('.category-page__aside-img--menu').on('click', function(){
    $('.category-page__aside-part').addClass('open');
    $('.category-page__aside-part').removeClass('cancel');
  })

  //mobile submenu at sinlge products page
  $('.category-page__top-aside-link-wrap.have-child span').on('click', function(){
    $(this).closest('.category-page__top-aside-link-wrap.have-child').addClass('active-sub');
    $(this).closest('.category-page__top-aside-inner').addClass('gotochild');
    subMenuHeightMob = $(this).closest('.category-page__top-aside-link-wrap.have-child').next('ul.category-page__aside-list.mob').height();
    menuHeightMob = $(this).closest('.category-page__top-aside-inner').height();
    $(this).closest('.category-page__top-aside-inner').css('height',subMenuHeightMob);
    $('.category-page__top-aside-link-wrap.first span').on('click', function(){
      $('.category-page__top-aside-link-wrap.have-child').removeClass('active-sub');
      $('.category-page__top-aside-link-wrap.have-child').closest('.category-page__top-aside-inner').removeClass('gotochild');
      $(this).closest('.category-page__top-aside-inner').css('height',menuHeightMob);
    })
  })

  //fix height submenu on dekstop at sinlge products page
  $menuHeightMob = $('.single-products-wrapper__background-inner .category-page__aside-wrap').outerHeight() - $('.single-products-wrapper__background-inner .category-page__content-part').outerHeight();
  $('.single-products-main-2 .category-page__aside-part').css('min-height',$menuHeightMob);
}
function catAsideMenu($){
  $('.category-page__top-aside-title').on('click', function(){
    $('.category-page__top-aside-title').toggleClass('active');
    $('.category-page__top-aside-inner').toggleClass('active');
    $('.category-page__top-aside').toggleClass('active');
  })
}

function singlPageGall($){
  $('.single-products-main-2').magnificPopup({
    delegate: 'figure a',
    type: 'image',
    tClose: 'Закрыть',
    closeBtnInside: true,
    tLoading: 'Загрузка...',
    removalDelay: 300,
    mainClass: 'my-mfp-gallery',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      tCounter: '<span class="mfp-counter">%curr% из %total%</span>',
      preload: [0,1], // Will preload 0 - before current, and 1 after the current image
      tError: '<a href="%url%">Изображение</a> не может быть загружено.', // Error message
      tPrev: 'Предыдущий',
      tNext: 'Следующий'
    }
  });
  $('.single-products-page__gallery-wrap').magnificPopup({
    delegate: '.owl-item:not(.cloned) a.single-products-page__gallery-item',
    type: 'image',
    tClose: 'Закрыть',
    closeBtnInside: true,
    tLoading: 'Загрузка...',
    removalDelay: 300,
    mainClass: 'my-mfp-gallery',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      tCounter: '<span class="mfp-counter">%curr% из %total%</span>',
      preload: [0,1], // Will preload 0 - before current, and 1 after the current image
      tError: '<a href="%url%">Изображение</a> не может быть загружено.', // Error message
      tPrev: 'Предыдущий',
      tNext: 'Следующий'
    }
  });
  $('.single-archive__content-wrap').magnificPopup({
    delegate: 'figure a',
    type: 'image',
    tClose: 'Закрыть',
    closeBtnInside: true,
    tLoading: 'Загрузка...',
    removalDelay: 300,
    mainClass: 'my-mfp-gallery',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      tCounter: '<span class="mfp-counter">%curr% из %total%</span>',
      preload: [0,1], // Will preload 0 - before current, and 1 after the current image
      tError: '<a href="%url%">Изображение</a> не может быть загружено.', // Error message
      tPrev: 'Предыдущий',
      tNext: 'Следующий'
    }
  });
}

function aboutCompPageGall($){
  $('.about-comp__page-eight-item-wrap').magnificPopup({
    delegate: 'a',
    type: 'image',
    tClose: 'Закрыть',
    closeBtnInside: true,
    tLoading: 'Загрузка...',
    removalDelay: 300,
    mainClass: 'my-mfp-gallery',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      tCounter: '<span class="mfp-counter">%curr% из %total%</span>',
      preload: [0,1], // Will preload 0 - before current, and 1 after the current image
      tError: '<a href="%url%">Изображение</a> не может быть загружено.', // Error message
      tPrev: 'Предыдущий',
      tNext: 'Следующий'
    }
  });
}

// function fixSingletables($){
//   $(".single-products-main-2__content .wp-block-table").each(function() {
//     $(".single-products-main-2__content .wp-block-table").last().addClass( "last");
//     $(".single-products-main-2__content .wp-block-table").first().addClass( "first");
//   }
//   )
// }

function popupBtn($){
 $('.btn-popup').magnificPopup({
   removalDelay: 300,
   mainClass: 'mfp-fade',
   tClose: 'Закрыть',
   fixedContentPos: true,
   closeBtnInside: true
 });
}

function customSelect($){
  $('.selectpicker').selectpicker();
  $('.selectpicker').on('show.bs.select', function (e, clickedIndex, isSelected, previousValue) {
    customSelectInit($);
  });
  $('.selectpicker').on('hide.bs.select', function (e, clickedIndex, isSelected, previousValue) {
    customSelectInit($);
  });
  function customSelectInit($){
    sel = $('.single-products-popup__select li.selected');
    $('.single-products-popup__select li.dropdown-header').removeClass('current');
    $('.single-products-popup__select li:not(.dropdown-header)').addClass('closed-opt');
    $('.single-products-popup__select li.dropdown-header').addClass('closed-group');
    $(sel).removeClass('closed-opt');
    head = $(sel).prevAll('.dropdown-header').first()
    head.removeClass('closed-group');
    head.addClass('current');
    classOptGr = head.attr("class").split(' ')[1];
    $('.' + classOptGr).removeClass('closed-opt');
    $('.dropdown-header').on('click',function(){
      $(this).toggleClass('closed-group');
      classOptGr=$(this).attr("class").split(' ')[1];
      $('.' + classOptGr+':not(.dropdown-header)').toggleClass('closed-opt');
      $(window).scroll();
    })
  }
}

function customNumbInput($){
  $('.form__countwrap .minus').on('click', function(){
    inpVal=$(this).parent().find('.form__count').val();
    if(inpVal==1){
    }
    else{
      inpVal = inpVal-1;
    }
    $(this).parent().find('.form__count').val(inpVal);
  })
  $('.form__countwrap .plus').on('click', function(){
    inpVal=$(this).parent().find('.form__count').val();
    if(inpVal==99){
    }
    else{
      inpVal = Number(inpVal)+1;
    }
    $(this).parent().find('.form__count').val(inpVal);
  })

  $('.form__count').unbind('keyup change input paste').bind('keyup change input paste',function(e){
    var $this = $(this);
    var val = $this.val();
    var valLength = val.length;
    var maxCount = $this.attr('maxlength');
    var min= $this.attr('min');
    if(valLength>maxCount){
      $this.val($this.val().substring(0,maxCount));
    }
    if($this.val()<min){
      $this.val(min);
    }
  }); 
}

function wrData($){
  wrDataInit($);
  $("#order input, #order select, #order textarea").change(function() {
    wrDataInit($,this);
  })
  $('.form__verifdata-title').on('click',function(){
    wrDataInit($,this);
    $(this).toggleClass('active');
    $(this).parent().find('.form__verifdatawrap').toggleClass('closed');
  })
  function wrDataInit($,th){
    $(th).closest('form').find('.single-products-popup__verifdata li').remove();
    $('#order [data-title]').each(function() {
      data = $(this).data("title");
      val = $(this).val();
      text = '<li><span>' + data + ': </span><i>' + val + '</i></li>';
      $(th).closest('form').find('.single-products-popup__verifdata').append(text);
    })
  }
}
// function deleteItem(e,th){
//   var input = document.getElementsByClassName('form__inputfile')[0];
//   var arr = document.getElementsByClassName('form__inputfile')[0].files;
//   var arrfiles = Array.from(arr);
//   arrfiles.splice(e,1);
//   console.log(arrfiles[0]);
//   input.value="";
//   input.dispatchEvent(new Event("change"));
// }
function inputFile($){

 input = $('.form__inputfile'),
 output = $('.single-products-popup__uploadfile .file-ouput')
 fileName = '';

 input.on('change', function(e){
  $(output).empty();
  if(this.files.length){
    if(this.files[0].size > 31457280){
      this.value = "";
      input.after('<label id="attach_file-error" class="error" for="attach_file">Максимальный размер превышен.</label>');
    }
    else if(this.files.length > 10 ){
      this.value = "";
      input.after('<label id="attach_file-error" class="error" for="attach_file">Нельзя загрузить больше 10 файлов.</label>');
    }
    else{
      for(i = 0; i < this.files.length; i++){
        arrfiles.push(this.files[i]);
      }
      this.value = "";
      for(i = 0; i < arrfiles.length; i++){
        $(output).append('<li data-id="'+ i +'" class="file-ouput-item file-ouput-item-' + i + '">' + arrfiles[i].name + '<a class="delete" data-id="'+ i +'">Удалить</a></li>');
      }
    }
  }
});

 $('.single-products-popup__uploadfile .file-ouput').on('click', function(e){
  if(e.target.classList.contains('delete')){
    id = e.target.dataset.id;
    arrfiles.splice(id,1); //delete 
    $(output).empty(); //delete all links in output
    for(i = 0; i < arrfiles.length; i++){
      $(output).append('<li data-id="'+ i +'" class="file-ouput-item file-ouput-item-' + i + '">' + arrfiles[i].name + '<a class="delete" data-id="'+ i +'">Удалить</a></li>');
    }
    input.value="";
  }
});
}

function animationSingl($){
  if($('.single-products-main-2').length){
   heightCont = $('.single-products-main-2').height();
   if(heightCont<2000){
     if($('.comet-icon').length){
      $('.comet-icon').remove();
    }
    if($('.frontpage-circle-wrap--two').length>0){
      $('.frontpage-circle-wrap--two').remove();
    }
    if($('.frontpage-circle-wrap').length>0){
      $('.frontpage-circle-wrap').remove();
    }
    if($('.frontpage-circle-wrap--two').length>0){
      $('.frontpage-circle-wrap--two').remove();
    }
    if($('.airship-icon').length>0){
      $('.airship-icon').remove();
    }
    if($('.fire-comet-icon').length>0){
      $('.fire-comet-icon').remove();
    }
  }
}

if($('.single-wrapper-archive').length){
 heightCont = $('.single-wrapper-archive').height();
 if(heightCont<4000){
  if($('.frontpage-circle-wrap--two').length>0){
    $('.frontpage-circle-wrap--two').remove();
  }
  if($('.frontpage-circle-wrap').length>0){
    $('.frontpage-circle-wrap').remove();
  }
  if($('.airship-icon').length>0){
    $('.frontpage-circle-wrap--two').remove();
  }
  if($('.airship-icon--two').length>0){
    $('.frontpage-circle-wrap--two').remove();
  }
  if($('.airship-icon--three').length>0){
    $('.airship-icon').remove();
  }
}
}

if($('body.search').length){
 heightCont = $('body.search').height();
 if(heightCont<700){
  if($('.frontpage-circle-wrap--two').length>0){
    $('.frontpage-circle-wrap--two').remove();
  }
  if($('.frontpage-circle-wrap').length>0){
    $('.frontpage-circle-wrap').remove();
  }
}
else if(heightCont<1081){
  if($('.frontpage-circle-wrap').length>0){
    $('.frontpage-circle-wrap').remove();
  }
}
}

if($('.privacy-policy').length){
  heightCont = $('.privacy-policy').height();
  if(heightCont<1500){
    if($('.frontpage-circle-wrap--two').length>0){
      $('.frontpage-circle-wrap--two').remove();
    }
    if($('.frontpage-circle-wrap').length>0){
      $('.frontpage-circle-wrap').remove();
    }
  }
}

}
function partnershipToggle($){
  $('#parnership-wrapper .frontpage-main__btn').on('click', function(e){
    e.preventDefault();
    var id  = $(this).attr('href'),
    top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 200);
    $('#parnership-wrapper .frontpage-main__partner-link').addClass('active');
    $(this).css('display','none');
  })
  $('#about-comp-wrapper .documents-main__btn').on('click', function(e){
    e.preventDefault();
    var id  = $(this).attr('href'),
    top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 200);
    $('#about-comp-wrapper .about-comp__page-eight-item').addClass('active');
    $(this).css('display','none');
  })
}

function dropdownMenuMob($){
  if ($(window).width() < 1200) {
    $("#wrapper-navbar .dropdown-toggle").attr('data-toggle', 'dropdown');
    $("#wrapper-navbar .dropdown-toggle").on('click', function(e){
      if(e.clientX > $(this).offset().left + $(this).outerWidth()){
        // debugger;
        // $(this).next('.dropdown-menu').toggleClass('show');
      }
      else{
        href=$(this).attr('href');
        if(href){
          if(!$(this).next('.dropdown-menu.show').length){
            $(this).next('.dropdown-menu').attr('style', 'display: none !important');
          }
          else if($(this).next('.dropdown-menu.show').length){
            $(this).next('.dropdown-menu').attr('style', 'display: block !important');
          }
          document.location.href = href;
        }
      }
    })
    $('#wrapper-navbar .dropdown-item').on('click', function(){
      if($(this).parents('.dropdown-menu.show').length){
        $(this).parents('.dropdown-menu').attr('style', 'display: block !important');
      }
      else if(!$(this).parents('.dropdown-menu.show').length){
        $(this).parents('.dropdown-menu').attr('style', 'display: none !important');
      }
    })
  } else {
    $("#wrapper-navbar .dropdown-toggle").removeAttr('data-toggle dropdown');
  }
  if ($(window).width() < 1200) {
    $('#wrapper-navbar .dropdown-toggle').on('click', function(){
      $('.mobile-menu-list .dropdown-item').each(function(index){
        if($(this).attr('href')==document.location.href){
          $(this).parent().addClass('active');
        }
      })
    })
  }
}

function URimageSlider($){
  if ($(window).width() > 1200) {
    $('.single:not(.single-products) .slider-pro').bind("DOMSubtreeModified", function() {
      thumpWrapwidth = $('.single .sp-thumbnails-container').width();
      thumpWrapwidth = Number(thumpWrapwidth) + 20;
      thumpWrapwidth = 'width: ' + thumpWrapwidth + 'px !important; margin: auto !important;left: 0 !important;'
      $('.single .sp-arrows').attr('style', thumpWrapwidth);
    });
  }
  $(document).click(function(event) {
    imgClass = $(event.target).attr('class');
    if(imgClass == "sp-image"){
      $('.sp-full-screen-button').trigger('click');
    }
  });
}
function youtube($){
  if( ($('.wp-block-embed-youtube iframe').length>0) ){
    iframe=$('.wp-block-embed-youtube iframe');
    iframeAttr=$('.wp-block-embed-youtube iframe').attr('src');
    iframeWidth=$('.wp-block-embed-youtube iframe').attr('width');
    iframeHeight=$('.wp-block-embed-youtube iframe').attr('height');
    iframeAttr=iframeAttr.replace('https://www.youtube.com/embed/','');
    iframeAttrId=iframeAttr.replace('?feature=oembed','');
    iframe.before('<img style="max-width: ' + iframeWidth + 'px ; height: ' + iframeHeight + 'px ;" id="video-cover" src="https://i.ytimg.com/vi/' + iframeAttrId + '/maxresdefault.jpg" alt="Video title">');
    iframe.after('<button id="play" class="play-btn"><svg width="115" height="115" viewBox="0 0 115 115" fill="none" xmlns="http://www.w3.org/2000/svg"><g filter="url(#filter0_d)"><circle cx="57.5" cy="57.5" r="37.5" fill="#2FBBFB"/></g><path d="M72 53.5359C74.6667 55.0755 74.6667 58.9245 72 60.4641L54 70.8564C51.3333 72.396 48 70.4715 48 67.3923L48 46.6077C48 43.5285 51.3333 41.604 54 43.1436L72 53.5359Z" fill="white"/><defs><filter id="filter0_d" x="0" y="0" width="115" height="115" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset/><feGaussianBlur stdDeviation="10"/><feColorMatrix type="matrix" values="0 0 0 0 0.184554 0 0 0 0 0.731758 0 0 0 0 0.984314 0 0 0 0.9 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs></svg></button>');
    $('#play').on('click', function(e) {
      e.preventDefault();
      $(".wp-block-embed-youtube iframe")[0].src += "?autoplay=1";
      $('.wp-block-embed-youtube iframe').show();
      $('.wp-block-embed-youtube #video-cover').hide();
      $('.wp-block-embed-youtube #play').hide();
    })
  }
}
function autoTextWidth($){
  if ($(window).width() > 1200) {
    textWidth = $('.frontpage-circle-3--earth').width();
    if(textWidth>0){
      $('.frontpage-main--fir .frontpage-main__text-inner').css('width', textWidth-40);
      console.log(textWidth);
    }
    $(window).resize(function() {
      textWidth = $('.frontpage-circle-3--earth').width();
      if(textWidth>0){
        $('.frontpage-main--fir .frontpage-main__text-inner').css('width', textWidth-40);
        console.log(textWidth);
      }
    })
  }
  else{
    $('#frontpage-pagepiling .frontpage-main__text-inner').css('width', '100%');
  }
}

function valid($){
  $('input[type="tel"]').on('keypress', function() {
    var that = this;
    setTimeout(function() {
      var res = /[^0-9-(-)-+--]/g.exec(that.value);
      that.value = that.value.replace(res, '');
    }, 0);
  });
}

function owlCarousel2($){
 $(".single-products-page__gallery-thumb-wrap").owlCarousel({
  loop: false,
  items:4,
  center: false, 
  nav: true,
  dots: false,
  autoplay:false,
  autoHeight: false,
  margin: 20,
  navText : ["<i class='left'></i>","<i class='right'></i>"]
});

}

jQuery(document).ready(function($) {

 $('input[name=utm]').val(window.location);

  //full-page scroll at frontpage
  fullpage($);

  //animation when mouse moving at frontpage
  MouseDrag($);

  //close dropdown menu on click in mobile
  clickBackButMob($);

  //send form script
  formSend($);

  //dekstop and mobile submenus at single products page
  togglCatSideb($);

  //mobile submenu at single products page
  catAsideMenu($);

  //add gallery at single products page
  singlPageGall($);

  //add classes to tables at single products page
  // fixSingletables($);

  //add popup when button is clicked
  popupBtn($);

  //custom multi select in form for products post page
  customSelect($);

  //custom input[type="number"] in form at single products page
  customNumbInput($);

  //write all data from form at single products page
  wrData($);

  //custom input type="file" 
  inputFile($);

  //animation and icons at single products page
  animationSingl($);

  //toggle list at partnehrship page on mobile
  partnershipToggle($);

  //popups at about page page
  aboutCompPageGall($);

  //fix dropdown wp menu
  dropdownMenuMob($);

  //fix image slider plugin on archive page
  URimageSlider($);

  //add custom icon to youtube video
  youtube($)

  //add width to text at frontpage
  autoTextWidth($);

  //add validation 
  valid($);

  owlCarousel2($);
});