<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Soft;

class SoftController extends Controller
{
    public function index()
    {
        return Soft::all();
    }
}
