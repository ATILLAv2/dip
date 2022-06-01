$(document).ready(function() {

    $('.btn_washer').click( function(event){
        event.preventDefault();
        $('#myOverlay').fadeIn(297,	function(){
          $('#washer_pop') 
          .css('display', 'block')
          .animate({opacity: 1}, 198);
        });
      });
          $('#myModal__close, #myOverlay').click( function(){
        $('#washer_pop').animate({opacity: 0}, 198, function(){
          $(this).css('display', 'none');
          $('#myOverlay').fadeOut(297);
        });
      });
      


      $('.btn_dishwasher').click( function(event){
        event.preventDefault();
        $('#myOverlay').fadeIn(297,	function(){
          $('#dishwasher_pop') 
          .css('display', 'block')
          .animate({opacity: 1}, 198);
        });
      });
      $('#myModal__close, #myOverlay').click( function(){
        $('#dishwasher_pop').animate({opacity: 0}, 198, function(){
          $(this).css('display', 'none');
          $('#myOverlay').fadeOut(297);
        });
      });


      $('.btn_holo').click( function(event){
        event.preventDefault();
        $('#myOverlay').fadeIn(297,	function(){
          $('#holo_pop') 
          .css('display', 'block')
          .animate({opacity: 1}, 198);
        });
      });
      $('#myModal__close, #myOverlay').click( function(){
        $('#holo_pop').animate({opacity: 0}, 198, function(){
          $(this).css('display', 'none');
          $('#myOverlay').fadeOut(297);
        });
      });


      $('.btn_oven').click( function(event){
        event.preventDefault();
        $('#myOverlay').fadeIn(297,	function(){
          $('#oven_pop') 
          .css('display', 'block')
          .animate({opacity: 1}, 198);
        });
      });
      $('#myModal__close, #myOverlay').click( function(){
        $('#oven_pop').animate({opacity: 0}, 198, function(){
          $(this).css('display', 'none');
          $('#myOverlay').fadeOut(297);
        });
      });
});