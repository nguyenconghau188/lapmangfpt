<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getIndex() 
    {
        return view('client.pages.home');
    }

    public function getService()
    {
        return view('client.pages.service');
    }

    public function getServiceInternet()
    {
        return view('client.pages.service_internet');
    }

    public function getServiceTV()
    {
        return view('client.pages.service_tv');
    }

    public function getPlayBox()
    {
        return view('client.pages.service_playbox');
    }
}
