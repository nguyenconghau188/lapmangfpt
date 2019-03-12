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

    public function getSupport()
    {
        return view('client.pages.support');
    }

    public function getSupportWifi()
    {
        return view('client.pages.support_wifi');
    }

    public function getSupportPhone()
    {
        return view('client.pages.support_phone');
    }

    public function getContact()
    {
        return view('client.pages.contact');
    }
}
