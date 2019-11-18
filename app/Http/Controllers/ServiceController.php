<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Auth;

class ServiceController extends Controller
{
    public function getService()
    {
    	return view('service.main');
    }

    public function getHealths()
    {
    	return view('service-post.healths');
    }

    public function getSalon()
    {
    	return view('service-post.salon');
    }

    public function getHotel()
    {
    	return view('service-post.hotel');
    }

}
