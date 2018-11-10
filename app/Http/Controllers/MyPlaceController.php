<?php

namespace Dmrse\Http\Controllers;

use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function index()
    {

        $name = 'Dmrse';

        $id = '7236A0A72036C3B19B01922B266DDDCFE9A2A2AD7CEB6F1E368CE3619E8D64E3';

        $OAuth2_client_secret = '00BD5F98A1BC14D0B7BA38D421796C10FE08FBB61D3F82E63B9151846060024BDE2592F7B2B3135E3ABA6F1C87AB3C5A5A61AE01BD8CDEBFC53CE9BAECD44DD';

        return view('place.index');
    }
}
