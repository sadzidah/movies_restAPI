
$(document).ready(function(){   // when the webpage loads
    $("a").on('click', function(event) {  // we put event listener on <a> and if it gets clicked..
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
  
        // We animate scrolldown from that location to location specified by href attribute in anchor link
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
          window.location.hash = hash;
        });
      }
    });
  });

$("div.image-div").hover(function() {  // when I hover over image div
    $(this).toggleClass("show-movie-desc");  // toggle show-movie-desc
  });
  
  // Which will set some opacities to 0 and some to 1, put alpha transparent background over current background
  // Add transitions and more..
  // Check show-movie-desc in main.css for further details