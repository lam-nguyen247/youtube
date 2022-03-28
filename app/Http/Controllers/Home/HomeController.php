<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;

class HomeController extends Controller
{
    public function index()
    {
        dd(1);
        $agent = new Agent();
        return view('home.index', compact('agent'));
    }
}
