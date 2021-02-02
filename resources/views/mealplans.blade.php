@extends('layout.app')
@section('title', 'Eduane')
@section('maincontent')

<div class="mealplans_page mt-16 container" style="">
    @if (Auth::check())
    <navbar :user="{{Auth::user()}}"></navbar>        
    @else
    <navbar class="mb-12 bg-orange"></navbar>             
    @endif
<section style="margin: 0 auto;">
    <div class="mb-12 mt-20 flex-inline justify-center text-center">
        <div>
    <h2 class=" text-orange">Your Goal: Get lean</h2>
    <p>Our get lean program involves low carbohydrates, balanced protein and healthy fats.
    </p>
        </div>
    </div>
</section>
    <section class="w-full ml-2">
        <div class="flex justify-center">
            <div class="border-r-2 border-black mr-4 p-2">
                <div class="text-center">
                    <h1 class="mb-2 text-xs sm:text-base md:text-2xl lg:text-3xl"><span>≤</span>400kcal</h1>
                    <h2 class="text-sm">Calorie</h2>
                </div>
            </div>
            <div class="border-r-2 border-black mr-4 p-2">
                <div class="text-center">
                    <h1 class="mb-2 text-xs sm:text-base md:text-2xl lg:text-3xl"><span>≤</span>400kcal</h1>
                    <h2 class="text-sm">Calorie</h2>
                </div>
            </div>
            <div class="border-r-2 border-black mr-4 p-2">
                <div class="text-center">
                    <h1 class="mb-2 text-xs sm:text-base md:text-2xl lg:text-3xl"><span>≤</span>400kcal</h1>
                    <h2 class="text-sm">Calorie</h2>
                </div>
            </div>
            <div class=" mr-4 p-2">
                <div class="text-center">
                    <h1 class="mb-2 text-xs sm:text-base md:text-2xl lg:text-3xl"><span>≤</span>400kcal</h1>
                    <h2 class="text-sm lg:text-base">Calorie</h2>
                </div>
            </div>


        </div>
        <p class="text-center text-xs md:text-sm lg:text-sm my-6">(above data is based on the proportion per meal)</p>
        <div></div>
    </section>
    <section class="plan_durations w-full sm:w-full md:w-4/5 lg:w-3/5 mx-auto">
                <h2 class="text-center my-2 text-orange">Pick Your Program length</h2>

                <div class="flex flex-wrap py-4  bg-gray-100 rounded-md shadow-md">
                  <div class="w-full flex justify-center items-center md:w-2/5 lg:w-2/5 ">
                      <h1 class="text-base ">1 week (Five days)</h1>
                  </div>
                  <div class=" w-full md:w-2/5 lg:w-2/5 ">
                    <p class=" text-xs sm:text-sm md:text-base p-1 py-2 sm:py-1 text-center sm:text-left">Ideal for those that are new to meal plan programs and would like to test the waters first.
                    </p>
                  </div>
                  <div class=" w-full flex justify-center items-center md:w-1/5 lg:w-1/5">
                    <button class="bg-orange text-white rounded-3xl py-1 px-4">  Select</button>
                  </div>
                </div>
          
    </section>

    <section class="meal_packages w-full sm:w-full md:w-4/5 lg:w-3/5 mx-auto py-2">
        <div class="package_block bg-gray-100 rounded-md shadow-md  my-2">
            <h1 class="text-center text-base py-2"> 1 week (Five days)</h1>
            <div class="flex w-2/3  mx-auto package_item ">
                <div class="flex p-2 justify-center items-center">
                    <div class="package_image">
                        <img class="h-32 sm:h-32 w-38" src="img/meal_plan.webp" alt=" get-lean">
                    </div>
                    <div class=" px-2 package_info">
                        <ul>
                        <li>2 meals / day</li>
                        <li>Breakfast + Lunch</li>
                        <li>$75/meal*</li>
                        </ul>
                        <div class="package_btn">
                            <button class="bg-orange text-white rounded-3xl py-1 px-4">  Select</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>






</div>

@endsection
