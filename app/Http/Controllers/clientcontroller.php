<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientcontroller extends Controller
{
    //index page view function
    public function index(){
        return view('client.index');
    }
    //about page view function
    public function about(){
        return view('client.about');
    }
    // service page function
    public function service(){
        return view('client.service');
    }
    //why us function
    public function whyus(){
        return view('client.whyus');
    }
    //team page view function
    public function team(){
        return view('client.team');
    }
    //contract page view function
    public function contactus(){
        return view('client.contract');
    }
}
