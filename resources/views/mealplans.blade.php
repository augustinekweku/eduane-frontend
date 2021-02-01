@extends('layout.app')
@section('title', 'Eduane')
@section('maincontent')
@if (Auth::check())
<navbar :user="{{Auth::user()}}"></navbar>        
@else
<navbar class="my-12 bg-orange"></navbar>             
@endif
<div class="mealplans_page mt-16 container" style="">

    <div class="my-12 text-center">
    <h2 class=" text-orange">Your Goal: Get lean</h2>
    <p>Our get lean program involves low carbohydrates, balanced protein and healthy fats.
    </p>
    </div>
    <section>
        <div class="flex">
            <div class="border-r-2 border-black mr-4 p-2">
                <div>
                    <h2><span>≤</span>400kcal</h2>
                    <h3>Calorie</h3>
                </div>
            </div>
            <div>
                <div>
                    <h2><span>≤</span>400kcal</h2>
                    <h3>Calorie</h3>
                </div>
            </div>
        </div>
    </section>






</div>

@endsection
