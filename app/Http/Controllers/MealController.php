<?php

namespace App\Http\Controllers;

use App\Models\Mealplan;
use App\Models\Mealplanduration;
use App\Models\Mealplanpackages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MealController extends Controller
{
    public function index($id) {
        $mealplan =  Mealplan::where('id', $id)->get();
        $mealplandurations = Mealplanduration::get();
        $mealplanpackages = Mealplanpackages::where('mealplan_id', $id)->get();
        //return $mealplanpackages;
        return view('mealplans')->with(['mealplan' => $mealplan, 'mealplandurations' => $mealplandurations, 'mealplanpackages' => $mealplanpackages]);
    }
}
