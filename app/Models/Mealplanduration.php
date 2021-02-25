<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mealplanduration extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'user_id'
    ]; 

    public function mealplanpackage()
    {
        return $this->belongsToMany('App\Models\Mealplanpackages', 'mealplanduration_mealplanpackages');
    }
}
