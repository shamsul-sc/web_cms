<?php

namespace App\Http\Controllers;
use App\Models\HomeSlider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = HomeSlider::where('status', 'show')->orderBy('position')->get();
        return view('pages.home', compact('sliders'));
    }
}
