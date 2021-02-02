<?php

namespace App\Http\Controllers;

use App\Models\Mealplan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $mealplans = Mealplan::select('title', 'description', 'featuredImage')->get();
        return view('welcome')->with(['mealplans' => $mealplans]);;
    }
}
