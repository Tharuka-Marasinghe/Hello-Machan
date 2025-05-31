<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()

    {
        $testimonials = Testimonial::all();
        return view("admin.Home.testimonial", compact('testimonials'));
    }

    public function storeTestimonial(Request $request)
    {
        $request->validate([
            'tname' => 'required',
            'timage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tdescription' => 'required',
            'tprofession' => 'required',
        ]);

        if ($request->hasFile('timage')) {
            $imagepath = $request->file('timage')->store('testimonials', 'public');
        }

        Testimonial::create([
            'name' => $request->tname,
            'image' => $imagepath,
            'description' => $request->tdescription,
            'profession' => $request->tprofession,
        ]);

        return redirect()->back()->with('success', 'Testimonial added successfully!');
    }

    public function updateTestimonial(Request $request)
    {
        $request->validate([
            'tname' => 'required',

            'tdescription' => 'required',
            'tprofession' => 'required',
            'testimonial_id' => 'required',
        ]);
        if ($request->hasFile('timage')) {
            $imagepath = $request->file('timage')->store('testimonials', 'public');
        }
        $update = Testimonial::find($request->testimonial_id);

        $update->name = $request->tname;
        $update->description = $request->tdescription;
        $update->profession = $request->tprofession;
        $update->save();

        if ($request->hasFile('timage')) {
            $update->image = $imagepath;
        }

        return redirect()->back()->with('success', 'Testimonial updated successfully!');
    }

    public function deleteTestimonial($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->back()->with('success', 'Testimonial deleted successfully!');
    }
}
