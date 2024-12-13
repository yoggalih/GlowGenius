<?php

namespace App\Http\Controllers;

use App\Models\Skincare;
use Illuminate\Http\Request;

class SkincareController extends Controller
{
    public function index()
    {
        return view('recommendations');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product' => 'required|string',
            'skin_type' => 'required|string',
            'skin_condition' => 'required|string',
        ]);

        Skincare::create([
            'product' => $request->product,
            'skin_type' => $request->skin_type,
            'skin_condition' => $request->skin_condition,
        ]);

        return redirect()->route('dashboard');
    }
}
