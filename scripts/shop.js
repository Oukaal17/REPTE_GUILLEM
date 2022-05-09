document.getElementsByClassName("next").on('click', function(){
      var imatgeActual;
      imatgeActual.addClass('active');
      var imatgeSeguent = imatgeActual.next();

      if(imatgeSeguent.length > 0){
        imatgeActual.removeClass('active').css('z-index', -10);
        imatgeSeguent.addClass('active').css('z-index', 10);
      }
    });
    document.getElementsByClassName("prev").on('click', function(){
      var imatgeActual;
      imatgeActual.addClass('active');
      var imatgeSeguent = imatgeActual.next();

      if(imatgeAnterior.length > 0){
        imatgeActual.removeClass('active').css('z-index', -10);
        imatgeAnterior.addClass('active').css('z-index', 10);
      };

    });
