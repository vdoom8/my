$(document).ready(function() {
    $('.card').hover(
     function() {
      $(this).addClass('animated bounceInLeft'); // Добавляем класс bounce
     },
     function() {
      $(this).toggleClass('bounceOutRight'); // Убираем класс
     }
    )})