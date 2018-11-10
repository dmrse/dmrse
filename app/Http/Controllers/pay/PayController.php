<?php

namespace Dmrse\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{
    public function index()
    {
        return view('place.index');
    }
}