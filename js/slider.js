$(document).ready(function() {

/*PROGRESSBAR*/
  $( "#progressbar" ).progressbar({
    value: 0
  })
  .data("value","0");

  $(".right, #submit").click(function() {
      var currValue = $( "#progressbar" ).data("value");
      currValue = parseInt(currValue) ? parseInt(currValue) : 0;
      if(currValue <= 80) {
          $( "#progressbar" ).progressbar({
            value: currValue+20
          }).data("value",currValue+20);
          $("#progressLabel").html((currValue+20)+"% Complete");
      }
  });
/*END OF PROGRESSBAR*/

/*HIDE AND SHOW NEXT AND SUBMIT BUTTON*/
  $('#next, #next2, #next3, #next4, #submit').hide();

  $('input.show').click(function() {
    $('#next').show();

    $('input.show').click(function() {
      $('#next2').show();

      $('input.show').click(function() {
        $('#next3').show();

        $('input.show').click(function() {
          $('#next4').show();

          $('input.show').click(function() {
            $('#submit').show();
          })
        })
      })
    })
  })
/*END OF HIDE AND SHOW*/
  
  /*SLIDER*/
  $('.right').click(function() {
    var nextSlide = $('.slide.active-slide').hide().removeClass('active-slide').next('.slide')

    nextSlide.fadeIn().addClass('active-slide');

  });
});
