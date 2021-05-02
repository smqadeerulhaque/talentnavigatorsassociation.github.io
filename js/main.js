    const responsive = {
       
        0:{
          items:1
        }, 
        320:{
            items:1
        }, 
        560:{
          items:2
        },
        960:{
          items:3
        }
    }
    
    $(document).ready(function(){

        $nav = $('.nav');
        $toggleCollapse = $('toggle-collapse');

    /**click event on toggle menu*/
        $toggleCollapse.click(function(){
        $nav.toggleClass('collapse');
})
    //owl-crousel for blog
    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:4000, 
        responsive:responsive
    });
    //main-picture 
    $('.popper').popper({
        loop:true,
        autoplay:true,
        autoplayTimeout:1000,
    });
    // click to scroll top
    $('.move-up span').click(function () {
      $('html, body').animate({
          scrollTop: 0
      }, 1000);
     });
    // AOS Instance
    AOS.init();
});

mybutton = document.getElementById("myBtn");
  window.onscroll = function() {scrollFunction()};
  function scrollFunction(){
    if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else{
      mybutton.style.display = "none"
    }
  }
  function topFunction(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
alert("WELCOME TO THE LAND OF TALENT NAVIGATORS ASSOCIATION")
