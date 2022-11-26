<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUs(){

        return view("pages.aboutUs");

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUS
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $aboutUS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUS
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUs $aboutUS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutUs  $aboutUS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUs $aboutUS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutUs  $aboutUS
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUs $aboutUS)
    {
        //
    }


}
