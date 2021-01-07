<script src="{{mix('/js/app.js')}}"></script>
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
  console.log(scrollPos)
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
