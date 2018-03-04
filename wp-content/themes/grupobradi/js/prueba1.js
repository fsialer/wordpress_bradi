    window.sr = ScrollReveal();
    sr.reveal('.navbar', {
      duration: 2000,
      origin: 'bottom'
    });
    sr.reveal('.card', {
      duration: 2000,
      origin: 'top'
    });
    sr.reveal('.card', {
      duration: 2000,
      origin: 'top'
    });
    sr.reveal('.about-us', {
      duration: 2000,
      origin: 'left'
    });       
    sr.reveal('.au-img', {
      duration: 2000,
      origin: 'top'
    });
    sr.reveal('.au-lorem', {
      duration: 2000,
      origin: 'right'
    });
    sr.reveal('.team-tittle', {
      duration: 2000,
      origin: 'left'
    });
    sr.reveal('.team-1', {
      duration: 2000,
      origin: 'left'
    });
    sr.reveal('.team-2', {
      duration: 2000,
      origin: 'bottom'
    });
    sr.reveal('.team-3', {
      duration: 2000,
      origin: 'right'
    });

$(document).ready(function() {

// Gets the video src from the data-src on each button
var $imageSrc;  
$('.gallery img').click(function() {
    $imageSrc = $(this).data('bigimage');
});
console.log($imageSrc);
  
  
  
// when the modal is opened autoplay it  
$('#myModal').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get

$("#image").attr('src', $imageSrc  ); 
})
  
  
// reset the modal image
$('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#image").attr('src',''); 
}) 

// document ready  
});
