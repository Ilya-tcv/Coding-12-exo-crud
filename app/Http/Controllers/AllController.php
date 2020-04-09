<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\About;
use App\Service;
use App\Portfolio;
use App\Testimonial;
use App\Team;
use App\Contact;

class AllController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $abouts = About::all();
        $services = Service::all();
        $portfolios = Portfolio::all();
        $testimonials = Testimonial::all();
        $teams = Team::all();
        $contact = Contact::all();
    
        return view('welcome', compact('abouts', 'services', 'portfolios', 'testimonials', 'teams', 'contact'));
    }
}