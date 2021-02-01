<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('partials.header')
</head>
<body>

    <div id="app">
        @yield('maincontent')
    </div>

    <script src="{{mix('/js/app.js')}}"></script>
</body>

  <script>
    // NAVIGATION LOGO SCROLL TOP
$('.logo').on('click', function(e) {
  e.preventDefault();
  $('.nav-toggle').removeClass('open');
  $('.menu-left').removeClass('collapse');
  $('html, body').animate({
    scrollTop: 0
  }, 750, 'easeInOutQuad')
});
// LINKS TO ANCHORS
$('a[href^="#"]').on('click', function(event) {

  var $target = $(this.getAttribute('href'));

  if($target.length) {
    event.preventDefault();
    $('html, body').stop().animate({
      scrollTop: $target.offset().top
    }, 750, 'easeInOutQuad');
  }
});

// TOGGLE HAMBURGER & COLLAPSE NAV
$('.nav-toggle').on('click', function() {
  $(this).toggleClass('open');
  $('.menu-left').toggleClass('collapse');
});
// REMOVE X & COLLAPSE NAV ON ON CLICK
$('.menu-left a').on('click', function() {
  $('.nav-toggle').removeClass('open');
  $('.menu-left').removeClass('collapse');
});

$('.nav-toggle').on('click', function(){
  console.log('hello')
  $('header').addClass('header-white');

})

// SHOW/HIDE NAV

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();
var scrollPos;
$(window).scroll(function(event){
    didScroll = true;
    scrollPos = window.scrollY
    if(scrollPos > 10){
      $('header').addClass('header-white');
    }else{
      $('header').removeClass('header-white');
      
    } 
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        //commented this to my own editing
        //$('header').removeClass('show-nav').addClass('hide-nav');
        $('.nav-toggle').removeClass('open');
        $('.menu-left').removeClass('collapse');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            //commented this to my own editing
            //$('header').removeClass('hide-nav').addClass('show-nav');
        } 
    }

    lastScrollTop = st;
}
  </script>
</html>