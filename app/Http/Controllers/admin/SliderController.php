<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function Index()
    {
        $sliders = Slider::all();

        return view('admin.Home.slider', compact('sliders'));
    }

    public function storeslider(Request $request)
    {
        $validatedData = $request->validate([
            'top_sub_heading' => 'required',
            'heading' => 'required',
            'bottom_sub_heading' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'more_info_link' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $imagepath = $request->file('image')->store('slider', 'public');
        }

        Slider::create([
            'top_sub_heading' => $validatedData['top_sub_heading'],
            'heading' => $validatedData['heading'],
            'bottom_sub_heading' => $validatedData['bottom_sub_heading'],
            'image' => $imagepath,
            'more_info_link' => $validatedData['more_info_link']
        ]);

        return redirect()->back()->with('success', 'Slider Added Successfully');
    }

    public function updateslider(Request $request)
    {
        $validatedData = $request->validate([
            'top_sub_heading' => 'required',
            'heading' => 'required',
            'bottom_sub_heading' => 'required',
            'more_info_link' => 'nullable|url',
        ]);
        if ($request->hasFile('image')) {
            $imagepath = $request->file('image')->store('slider', 'public');
        }
        $update = Slider::find($request->slider_id);
        $update->top_sub_heading = $validatedData['top_sub_heading'];
        $update->heading = $validatedData['heading'];
        $update->bottom_sub_heading = $validatedData['bottom_sub_heading'];
        $update->more_info_link = $validatedData['more_info_link'];
        if ($request->hasFile('image')) {
            $update->image = $imagepath;
        }
        $update->save();
        return redirect()->back()->with('success', 'Slider Updated Successfully');
    }

    public function deleteslider($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->back()->with('success', 'Slider Deleted Successfully');
    }
}
