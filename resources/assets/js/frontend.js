jQuery(document).ready(function($) { 

/** OWL CAROUSEL**/
  $(".owl-carousel").each(function(index, el) {
    var config = $(this).data();
    config.navText = ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'];
    config.smartSpeed="300";
    if($(this).hasClass('owl-style2')){
      config.animateOut="fadeOut";
      config.animateIn="fadeIn";    
    }
    $(this).owlCarousel(config);
  });

/* Open menu on mobile */
  $(document).on('click','.btn-open-mobile',function(){
      var width = $(window).width();
      if(width >1024){
          if($('body').hasClass('home')){
              if($('#nav-top-menu').hasClass('nav-ontop') || $('#header').hasClass('optop')){
                  
              }else{

                  return false;
              }
          }
      }
      $(this).closest('.box-vertical-megamenus').find('.vertical-menu-content').slideToggle();
      $(this).closest('.title').toggleClass('active');
      return false;
  });

  /* Toggle nav menu*/
  $(document).on('click','.toggle-menu',function(){
      $(this).closest('.nav-menu').find('.navbar-collapse').toggle();
      return false;
  });

  /* elevator click*/ 
  $(document).on('click','a.btn-elevator',function(e){
      e.preventDefault();
      var target = this.hash;
      if($(document).find(target).length <=0){
          return false;
      }
      var $target = $(target);
      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 500);
      return false;
  })
});