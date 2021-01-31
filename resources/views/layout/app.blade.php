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
        @include('partials.nav')
        @yield('maincontent')
        
    </div>
    <script src="{{mix('/js/app.js')}}"></script>
</body>

<script>
    const hamburger = document.querySelector(".hamburger");
  const navLinks = document.querySelector(".nav-links");
  const links = document.querySelectorAll(".nav-links li");
  const scrollNav = document.querySelector("nav")
  const scrollHamburger = document.querySelectorAll(".line")
  console.log(scrollHamburger)
  hamburger.addEventListener('click', ()=>{
     //Animate Links
      navLinks.classList.toggle("open");
      links.forEach(link => {
          link.classList.toggle("fade");
      });
      //Hamburger Animation
      hamburger.classList.toggle("toggle");
     // for (let i = 0; i < scrollHamburger.length; i++) {
       // scrollHamburger[i].classList.toggle("blackColor")  
  //}
  
      scrollNav.classList.toggle("nav_no_padding");
  });
  
  
  document.addEventListener('scroll', ()=>{
    scrollPos = window.scrollY
    //console.log(scrollPos)
    if(scrollPos > 10){
      scrollNav.classList.add("nav-scroll")
      scrollNav.classList.remove("nav")
      for (let i = 0; i < scrollHamburger.length; i++) {
            scrollHamburger[i].classList.add("blackColor")
            hamburger.classList.add("hamburger_black") 
      }
  
  
    }else{
      scrollNav.classList.remove("nav-scroll")
      scrollNav.classList.add("nav")
      for (let i = 0; i < scrollHamburger.length; i++) {
            //scrollHamburger[i].classList.remove("blackColor")
            hamburger.classList.remove("hamburger_black") 
     
  
  }   
    }
  })
  </script>
</html>