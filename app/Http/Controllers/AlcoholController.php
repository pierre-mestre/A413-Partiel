<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alcohol;

class AlcoholController extends Controller
{
    public function index()
    {
        return Alcohol::all();
    }
}
