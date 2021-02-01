<nav class=" nav-bar py-2">
    <div  class="logo  items-center justify-between">
      <a class="toggleColour  no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
      Eduane
      </a>
    </div>
    <div class="hamburger">
        <div class="line line1"></div>
        <div class="line line2"></div>
        <div class="line line3"></div>
    </div>
    <ul class="nav-links">
      <div class="inside-links flex items-center ml-auto ">
          <span class="main-nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Solutions</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact Us</a></li>
        </span>
        @auth
        <li><a href="/logout" class="login-button   mx-1 bg-white text-gray-800 font-bold rounded-full py-2 px-4 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">Logout</a></li>
        @endauth
        @guest
        <li><a href="/login" class="login-button mb-2  mx-1 bg-white text-gray-800 font-bold rounded-full py-2 px-4 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">Login</a></li>
        <li><a href="/register" class="join-button mx-1 bg-white text-gray-800 font-bold rounded-full py-2 px-4 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">Join</a></li>         
        @endguest
      </div>
    </ul>
  </nav>