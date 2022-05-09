document.getElementsByClassName("next").on('click', function(){
      var imatgeActual;
      imatgeActual.addClass('active1');
      var imatgeSeguent = imatgeActual.next();

      if(imatgeSeguent.length > 0){
        imatgeActual.removeClass('active1').css('z-index', -10);
        imatgeSeguent.addClass('active1').css('z-index', 10);
      }
    });
    document.getElementsByClassName("prev").on('click', function(){
      var imatgeActual;
      imatgeActual.addClass('active1');
      var imatgeSeguent = imatgeActual.next();

      if(imatgeAnterior.length > 0){
        imatgeActual.removeClass('active1').css('z-index', -10);
        imatgeAnterior.addClass('active1').css('z-index', 10);
      };

    });
