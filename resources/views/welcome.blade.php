@extends('layout.app')
@section('title', 'Eduane')
@section('maincontent')
<div class="homepage" >
  <div class="nav_and_hero" style="background:url('/svg/meal-background.svg')">
    @if (Auth::check())
    <navbar :user="{{Auth::user()}}"></navbar>        
    @else
    <navbar></navbar>             
    @endif
<!--Hero-->
<div class="pt-8">
  <div class="container mt-10 px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
    <!--Left Col-->
    <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
      <h1 class="animate__animated animate__slideInRight my-4 text-5xl font-bold leading-tight">
        Meal Plans
      </h1>
      <p class="leading-normal text-2xl mb-8 animate__animated animate__slideInLeft">
        Calorie controlled meal delivered to you to stay healthy.
      </p>
      <button class="animate__animated animate__zoomIn mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        Subscribe
      </button>
    </div>
    <!--Right Col-->
    <div class="w-full md:w-3/5 py-6 chef_svg text-center animate__animated animate__slideInRight animate__delay-1s">
      <img class="w-full md:w-4/5 z-50 mx-auto " style="height:300px" src="svg/hero-svg.svg" />
    </div>
  </div>
</div>

<div class="relative -mt-12 lg:-mt-24">
  <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
        <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
        <path
          d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
          opacity="0.100000001"
        ></path>
        <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
      </g>
      <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
        <path
          d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
        ></path>
      </g>
    </g>
  </svg>
</div>

</div>

<section class="my-12 mx-2 lg:mx-4 xl:mx-8">
  <div class="flex flex-wrap my-6 justify-center">
    @if (count($mealplans)> 0)
    @foreach ($mealplans as $mealplan)
    <div class="w-full md:w-1/2 lg:w-1/3 px-3 my-2 animate__animated animate__zoomIn">
      <div class="flex bg-gray-100 justify-center items-center rounded-md shadow-md py-1">
        <div class=" w-2/5 my-auto mx-1">
        <img class=" p-0 xs:p-0 sm:p-0 md:p-0 lg:p-0 xl:p-2 2xl:p-4 h-20 xs:h-24 sm:h-24 md:h-24 lg:h-22 xl:h-32 rounded-full" src="{{$mealplan->featuredImage}}" alt=" get-lean">
        </div>
        <div class="px-3 ml-2 pt-3 md:ml-4">
          <h2 class="text-base xs:text-lg sm:text-xl lg:text-2xl font-semibold">{{$mealplan->title}}</h2>
          <p class="text-xs xs:text-base">{{$mealplan->description}}</p>
          <a href="mealplans/{{$mealplan->id}}" class="bg-orange text-black rounded-3xl py-1 px-4 mt-3">Select</a>
        </div>
      </div>
    </div>     
    @endforeach
        
    @endif



  </div>
</section>

<section class="how_it_works container my-16 mt-4">
<h1 class="text-center text-2xl font-semibold">HOW IT WORKS</h1>

<!-- Container -->
<div class="flex flex-wrap mt-2 mx-2">
    <!-- Item -->
    <div class="w-full md:w-1/2 lg:w-1/4 px-2 my-2">
        <div class="text-center p-4">
          <img class="h-20 sm:h-20 w-20 mx-auto" src="img/lightbulb.png" alt="">
          <h2 class="my-3">CHOOSE YOUR HEALTH GOAL</h2>
        </div>
    </div>
    <!-- Item -->
    <div class="w-full md:w-1/2 lg:w-1/4 px-2 my-2">
        <div class="text-center p-4">
          <img class="h-20 sm:h-20 w-20 mx-auto" src="img/pencil.png" alt="">
          <h2 class="my-3">SAVE YOUR GOAL AND KEEP TRACK OF YOUR PROGRESS</h2>
        </div>
    </div>
    <!-- Item -->
    <div class="w-full md:w-1/2 lg:w-1/4 px-2 my-2">
        <div class="text-center p-4">
          <img class="h-20 sm:h-20 w-20 mx-auto" src="img/truck.png" alt="">
          <h2 class="my-3">RECEIVE DELICIOUS FOODS AND KEEP TRACK OF PROGRESS</h2>
        </div>
    </div>
    <!-- Item -->
    <div class="w-full md:w-1/2 lg:w-1/4 px-2 my-2">
        <div class="text-center p-4">
          <img class="h-20 sm:h-20 w-20 mx-auto" src="img/dishes.png" alt="">
          <h2 class="my-3">STAY HEALTHY THROUGH OUR CALORIE CONTROLLED MEALS</h2>
        </div>
    </div>

    
</div>
</section>


<section class="testimonials py-6">

  <h1 class="testimonial_header text-center py-3">What our customers say</h1>
  <div class="carousel_test m-3">
  <testimonial-slider></testimonial-slider>
  </div>
</section>
  

<section class="faqs  mt-24">
  <h1 class="text-center my-2">FAQs</h1>
  <div class="">
  <faqs class="mx-auto container"></faqs>
  </div>

</section>



</div>
    @include('partials.footer')

@endsection
