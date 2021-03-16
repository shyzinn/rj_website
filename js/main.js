// SCROLL FUNCTION 
$(function () {
	$(document).scroll(function () {
	  var $nav = $(".navbar");
	  $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
	});
  });


// SCRIPT FOR A EVENT LISTENER ON THE GALLERY 

 document.addEventListener("click",function (e){
   if(e.target.classList.contains("gallery-item")){
   	  const src = e.target.getAttribute("src");
   	  document.querySelector(".modal-img").src = src;
   	  const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
   	  myModal.show();
   }
 })

// SCRIPT FOR RUN THE OWL CARROUSEL




$(document).ready(function() {
     
  $("#testimonial-slider").owlCarousel({
 
      slideSpeed : 300,
      paginationSpeed : 400,
      autoplay: true,
      items : 1, 
      autoPlay: 5000,
     
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});


