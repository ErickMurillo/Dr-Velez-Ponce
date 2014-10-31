$(document).ready(main);

function main(){

	  $(window).scroll(function() {
        if ($(window).scrollTop() >= $("#inicio").height()) {
          $('#arrow').css({'position':'fixed','bottom': '0'});
       
          
        } else {

          $('#arrow').css({'position':'absolute','bottom':'auto'});
          
          
        }
      });


      $(".menu a").on("click",function(){
   if(this.hash){
      //console.log($(this).attr('href'));
      $("html body").animate({"scrollTop":$($(this).attr('href')).offset().top-40},1400);
      return false;
         }
});



	  $(window).scroll(function() {
        if ($(window).scrollTop() >= $(".slide").height()) {   //AQUI VA EL ALTO DE LA IMAGEN 
          $('.navbar').css({'z-index':'100', 'position':'fixed','top':'0px'});
        } else {

          $('.navbar').css({'z-index':'100','position':'absolute','top':'auto'});
        }
      });
}
