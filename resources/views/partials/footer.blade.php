<footer class="footer-distributed">

  <div class="footer-left">
      <img src="img/logo.png">
    <h3><span>Eduane</span></h3>
  
    <p class="footer-links">
      <a href="#">Home</a>
      |
      <a href="#">Blog</a>
      |
      <a href="#">About</a>
      |
      <a href="#">Contact</a>
    </p>
  
    <p class="footer-company-name">© 2021 Eduane Co. Ltd.</p>
  </div>
  
  <div class="footer-center">
    <div>
      <i class="fa fa-map-marker"></i>
        <p><span>309 - Achimota </span>
        Neoplan - 400710</p>
    </div>
  
    <div>
      <i class="fa fa-phone"></i>
      <p>+233 242222322</p>
    </div>
    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="mailto:support@autonous.com">support@autonomous.com</a></p>
    </div>
  </div>
  <div class="footer-right">
    <p class="footer-company-about">
      <span>About the company</span>
      We offer training and skill building courses across Technology, Design, Management, Science and Humanities.</p>
    <div class="footer-icons">
      <a href="#" class="social_link"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-youtube"></i></a>
    </div>
  </div>
  </footer>
       


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


