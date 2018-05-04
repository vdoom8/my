$(".navbar a").click(function(){
    var offset = 50;
    $("body,html").animate({
     scrollTop:$("#" + $(this).data('value')).offset().top - offset + 'px'
    },1000)
    
   });