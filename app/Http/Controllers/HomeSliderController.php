<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HomeSliderRequest;
use App\Models\HomeSlider;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homeSliders = HomeSlider::all();
        return response()->json($homeSliders);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HomeSliderRequest $request)
    {
        // HomeSlider::create($request->validated());

        $validated = $request->validated();

        $homeSlider = new HomeSlider();
        
        $homeSlider->slider_text_top    = $validated['slider_text_top'];
        $homeSlider->slider_text_middle = $validated['slider_text_middle'];
        $homeSlider->slider_text_last   = $validated['slider_text_last'];
        $homeSlider->image              = $validated['image'];
        $homeSlider->alt_tag            = $validated['alt_tag'];
        $homeSlider->button_text        = $validated['button_text'];
        $homeSlider->position           = $validated['position'];
        
        
        // // get
        // $homeSlider->slider_text_top = $request->get('slider_text_top');
        // // input
        // $homeSlider->slider_text_middle = $request->input('slider_text_middle');
        // // without input or get
        // $homeSlider->slider_text_last   = $request->slider_text_last;
        // $homeSlider->image              = $request->input('image');
        // $homeSlider->alt_tag            = $request->input('alt_tag');
        // $homeSlider->button_text        = $request->input('button_text');
        // $homeSlider->button_url         = $request->input('button_url');
        // $homeSlider->position           = $request->input('position');
        
        $homeSlider->status             = $request->input('status');
        $homeSlider->save();

        // Additional logic or redirection after successful data storage
        // return redirect()->back()->with('success', 'Comment stored successfully!');

        return response()->json('Successfully added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $homeSlider = HomeSlider::find($id);        
        return response()->json($homeSlider);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HomeSliderRequest $request, string $id)
    {
        $validated = $request->validated();
        
        $homeSlider = HomeSlider::find($id);

        $homeSlider->slider_text_top    = $validated['slider_text_top'];
        $homeSlider->slider_text_middle = $validated['slider_text_middle'];
        $homeSlider->slider_text_last   = $validated['slider_text_last'];
        $homeSlider->image              = $validated['image'];
        $homeSlider->alt_tag            = $validated['alt_tag'];
        $homeSlider->button_text        = $validated['button_text'];
        $homeSlider->position           = $validated['position'];

        $homeSlider->status             = $request->input('status');

        $homeSlider->save();

        return response()->json('Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $homeSlider = HomeSlider::find($id);
        $homeSlider->delete();

        return response()->json('Successfully Deleted');
    }
}
