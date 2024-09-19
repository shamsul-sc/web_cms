<?php

namespace App\Http\Controllers;

use Log;
use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\HomeSliderRequest;

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
        try {
            $validated = $request->validated();

            $homeSlider = new HomeSlider();
            $homeSlider->slider_text_top    = $validated['slider_text_top'];
            $homeSlider->slider_text_top_bn = $validated['slider_text_top_bn'];
            $homeSlider->slider_text_last   = $validated['slider_text_last'];
            $homeSlider->slider_text_last_bn= $validated['slider_text_last_bn'];
            $homeSlider->alt_tag            = $validated['alt_tag'];
            $homeSlider->button_text        = $validated['button_text'];
            $homeSlider->button_text_bn     = $validated['button_text_bn'];
            $homeSlider->button_url         = $validated['button_url'];
            $homeSlider->position           = $validated['position'];
            $homeSlider->status             = $validated['status'];

            // Handle file upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $path = $file->store('slider_images', 'public');
                $homeSlider->image = basename($path);
            }

            $homeSlider->save();
            return response()->json('Successfully added.');
        } catch (\Exception $e) {
            Log::error('Error adding slider: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to add slider.'], 500);
        }
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
        if ($homeSlider) {
            $homeSlider->image_url = asset('storage/slider_images/' . $homeSlider->image);
            return response()->json($homeSlider);
        } else {
            return response()->json(['message' => 'Slider not found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HomeSliderRequest $request, string $id)
    {
        $homeSlider = HomeSlider::find($id);

        if (!$homeSlider) {
            return response()->json(['message' => 'Slider not found'], 404);
        }

        $validated = $request->validated();

        $homeSlider->slider_text_top    = $validated['slider_text_top'];
        $homeSlider->slider_text_top_bn = $validated['slider_text_top_bn'];
        $homeSlider->slider_text_last   = $validated['slider_text_last'] ?? $homeSlider->slider_text_last;
        $homeSlider->slider_text_last_bn= $validated['slider_text_last_bn'] ?? $homeSlider->slider_text_last_bn;
        $homeSlider->alt_tag            = $validated['alt_tag'] ?? $homeSlider->alt_tag;
        $homeSlider->button_text        = $validated['button_text'] ?? $homeSlider->button_text;
        $homeSlider->button_text_bn     = $validated['button_text_bn'] ?? $homeSlider->button_text_bn;
        $homeSlider->button_url         = $validated['button_url'] ?? $homeSlider->button_url;
        $homeSlider->position           = $validated['position'];
        $homeSlider->status             = $validated['status'];

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the old image
            if ($homeSlider->image) {
                Storage::delete('public/slider_images/' . $homeSlider->image);
            }

            // Store the new image
            $path = $request->file('image')->store('public/slider_images');
            $homeSlider->image = basename($path);
        }
        $homeSlider->save();

        return response()->json('Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the HomeSlider by ID
        $homeSlider = HomeSlider::find($id);

        if (!$homeSlider) {
            return response()->json(['message' => 'Slider not found'], 404);
        }

        // Check if the image exists and delete it
        if ($homeSlider->image) {
            // Construct the full path to the image
            $imagePath = 'public/slider_images/' . $homeSlider->image;

            // Delete the image file from storage
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
        }

        // Delete the HomeSlider record from the database
        $homeSlider->delete();

        return response()->json('Successfully Deleted');
    }
}
