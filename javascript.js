$(document).ready(function() {
  setTimeout(function() {
    $("#myModal").modal('show');
  }, 1000);

});


$(document).ready(function() {
  setTimeout(function() {
    $("#myModal").modal('hide');
  }, 8000);

});


//scroll normal
$('html,body').scrollTop(0);

//scroll suave
$('html, body').animate({scrollTop:0}, 'slow'); //slow, medium, fast





jQuery(document).ready(function(){

jQuery("#subirTopo").hide();

jQuery('a#subirTopo').click(function () {
         jQuery('body,html').animate({
           scrollTop: 0
         }, 800);
        return false;
   });

jQuery(window).scroll(function () {
         if (jQuery(this).scrollTop() > 1000) {
            jQuery('#subirTopo').fadeIn();
         } else {
            jQuery('#subirTopo').fadeOut();
         }
     });
});



								



