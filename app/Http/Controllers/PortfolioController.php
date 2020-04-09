<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $portfolios = Portfolio::all();

        return view('Portfolio.portfolioData', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save()
    {
        $portfolio = new Portfolio();

        $portfolio -> img_name = request('name');
        $portfolio -> img_desc = request('desc');
        $portfolio -> img_path = request('path');

        $portfolio->save();
        return redirect()->route('portfolio');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return view('Portfolio.edit', compact('portfolio'));
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
        $portfolio = Portfolio::find($id);
        $portfolio -> img_name = request('name');
        $portfolio -> img_desc = request('desc');
        $portfolio -> img_path = request('path');

        $portfolio->save();

        return redirect()->route('portfolio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Portfolio::where('id', $id)->delete();
        return redirect()->back();
    }
}