$(document).ready(function(){
    $('.next').on('click', function(){
      var imatgeActual = $('.active');
      var imatgeSeguent = imatgeActual.next();

      if(imatgeSeguent.length > 0){
        imatgeActual.removeClass('active').css('z-index', -10);
        imatgeSeguent.addClass('active').css('z-index', 10);
      }
    });
    $('.prev').on('click', function(){
      var imatgeActual = $('.active');
      var imatgeAnterior = imatgeActual.prev();

      if(imatgeAnterior.length > 0){
        imatgeActual.removeClass('active').css('z-index', -10);
        imatgeAnterior.addClass('active').css('z-index', 10);
      };

    })
  });
