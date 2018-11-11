<?php

namespace Dmrse\Http\Controllers;

use Dmrse\MyPlace;
use Illuminate\Http\Request;



class MyPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $MyPlaces = MyPlace::all();

        return view('place.index', compact('MyPlaces'));
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
     * @param  \Dmrse\MyPlace  $myPlace
     * @return \Illuminate\Http\Response
     */
    public function show(MyPlace $myPlace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Dmrse\MyPlace  $myPlace
     * @return \Illuminate\Http\Response
     */
    public function edit(MyPlace $myPlace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Dmrse\MyPlace  $myPlace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyPlace $myPlace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Dmrse\MyPlace  $myPlace
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyPlace $myPlace)
    {
        //
    }
}
