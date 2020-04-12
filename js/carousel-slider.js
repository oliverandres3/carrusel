//Nuevo Ingreso de paises
$(document).ready(function(){
  // Activate Carousel
  $("#myCarousel").carousel();
  // Enable Carousel Controls
  $(".left").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".right").click(function(){
    $("#myCarousel").carousel("next");
  });

 $("#myCarousel").carousel({
      interval: 50
    });

});


