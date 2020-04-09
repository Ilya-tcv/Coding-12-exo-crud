<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $testimonials = Testimonial::all();

        return view('Testimonial.testimonialData', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save()
    {
        $testimonial = new Testimonial();

        $testimonial -> name = request('name');
        $testimonial -> job = request('job');
        $testimonial -> text = request('text');

        $testimonial->save();
        return redirect()->route('testimonial');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('Testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial -> name = request('name');
        $testimonial -> job = request('job');
        $testimonial -> text = request('text');

        $testimonial->save();

        return redirect()->route('testimonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonial::where('id', $id)->delete();
        return redirect()->back();
    }
}