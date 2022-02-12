﻿$(document).ready(function(){
    $('.hits .slider').slick({
        arrows:true,/*Стрелочки*/
        dots:false,/*Точки*/
        adaptiveHeight:false,/*Адаптивная высота слайдера*/
        slidesToShow:3,/*Количество слайдов,которые покажет слайдер за 1 раз*/
        slidesToScroll:1,/*Количество слайдов,которые пролистываются за 1 клик*/
        speed:1000,/*Скорость перелистыванию слайдво(300 мсм)*/
        easing:'linear',/*Вид перелистывания слайдера*/
        infinite:true,/*Будет ли слайдер бесконечный*/
        initialSlide:0,/*Назначение стартового слайдера*/
        autoplay:false,/*Автоматическое перелистывание слайдов*/
        autoplaySpeed:1000,/*Скорость автоматического перелистывания слайдов(1000 - 1сек)*/
        pauseOnFocus:true,/*Пауза автопроигрывания при клике мыши*/
        pauseOnHover:true,/*Пауза при наведении на слайдер*/
        pauseOnDotsHover:true, /*Пауза автопроигрывания при наведении на точки*/
        draggable:false,/*Перелистывание свайпом на ПК*/
        swipe:true,/*Перелистывание свайпом на телефоне*/
        touchThreshold:5,/*Момент срабатывания свайпа при свайпе*/
        touchMove:false,/*Включает все возможности тачскрина*/
        waitForAnimate:true,/*Возможность отключения ожидать анимацию переключения*/
        centerMode:false,/*Выстраивания первого слайда по центру*/
        variableWidth:false,/*Растяжение слайдов по всей ширине*/
        rows:1,/*Ряды слайдера*/
        slidesPerRow:1,/*Количество слайдов в ряду*/
        vertical:false,/*Вертикальный слайдер*/
        verticalSwiping:false,/*Свайп вверх при вертикальном слайдере*/
        responsive:[/*АДаптив при определенном разрешении*/
            {
                breakpoint: 768,
                settings: {
                  
                },
            },
        ],
        mobileFirst:true,
    });
});
$(document).ready(function(){
    $('.news .slider').slick({
        arrows:true,/*Стрелочки*/
        dots:false,/*Точки*/
        adaptiveHeight:false,/*Адаптивная высота слайдера*/
        slidesToShow:3,/*Количество слайдов,которые покажет слайдер за 1 раз*/
        slidesToScroll:1,/*Количество слайдов,которые пролистываются за 1 клик*/
        speed:1000,/*Скорость перелистыванию слайдво(300 мсм)*/
        easing:'linear',/*Вид перелистывания слайдера*/
        infinite:true,/*Будет ли слайдер бесконечный*/
        initialSlide:0,/*Назначение стартового слайдера*/
        autoplay:false,/*Автоматическое перелистывание слайдов*/
        autoplaySpeed:1000,/*Скорость автоматического перелистывания слайдов(1000 - 1сек)*/
        pauseOnFocus:true,/*Пауза автопроигрывания при клике мыши*/
        pauseOnHover:true,/*Пауза при наведении на слайдер*/
        pauseOnDotsHover:true, /*Пауза автопроигрывания при наведении на точки*/
        draggable:false,/*Перелистывание свайпом на ПК*/
        swipe:true,/*Перелистывание свайпом на телефоне*/
        touchThreshold:5,/*Момент срабатывания свайпа при свайпе*/
        touchMove:false,/*Включает все возможности тачскрина*/
        waitForAnimate:true,/*Возможность отключения ожидать анимацию переключения*/
        centerMode:false,/*Выстраивания первого слайда по центру*/
        variableWidth:false,/*Растяжение слайдов по всей ширине*/
        rows:1,/*Ряды слайдера*/
        slidesPerRow:1,/*Количество слайдов в ряду*/
        vertical:false,/*Вертикальный слайдер*/
        verticalSwiping:false,/*Свайп вверх при вертикальном слайдере*/
        responsive:[/*АДаптив при определенном разрешении*/
            {
                breakpoint: 1200,
                settings: {
                  
                },
            },
        ],
        mobileFirst:false,
    });
});

$(".polzunok-5").slider({
    min: 0,
    max: 5000,
    values: [2000, 3000],
    range: true,
    animate: "fast",
    slide : function(event, ui) {    
    $(".polzunok-input-5-left").val(ui.values[ 0 ]);   
    $(".polzunok-input-5-right").val(ui.values[ 1 ]);  
  }	
  });
  $(".polzunok-input-5-left").val($(".polzunok-5").slider("values", 0));
  $(".polzunok-input-5-right").val($(".polzunok-5").slider("values", 1));
  $(".polzunok-container-5 input").change(function() {
  var input_left = $(".polzunok-input-5-left").val().replace(/[^0-9]/g, ''),	
  opt_left = $(".polzunok-5").slider("option", "min"),
  where_right = $(".polzunok-5").slider("values", 1),
  input_right = $(".polzunok-input-5-right").val().replace(/[^0-9]/g, ''),	
  opt_right = $(".polzunok-5").slider("option", "max"),
  where_left = $(".polzunok-5").slider("values", 0); 
  if (input_left > where_right) { 
    input_left = where_right; 
  }
  if (input_left < opt_left) {
    input_left = opt_left; 
  }
  if (input_left == "") {
  input_left = 0;	
  }		
  if (input_right < where_left) { 
    input_right = where_left; 
  }
  if (input_right > opt_right) {
    input_right = opt_right; 
  }
  if (input_right == "") {
  input_right = 0;	
  }	
  $(".polzunok-input-5-left").val(input_left); 
  $(".polzunok-input-5-right").val(input_right); 
  if (input_left != where_left) {
    $(".polzunok-5").slider("values", 0, input_left);
  }
  if (input_right != where_right) {
    $(".polzunok-5").slider("values", 1, input_right);
  }
  });