<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.index');
    }

    public function post(Request $request)
    {
        $validatedData = $request->validate([
            'alcohol' => 'nullable|exists:alcohols,id',
            'soft' => 'required|exists:softs,id',
        ]);

        // Logic
    }
}
