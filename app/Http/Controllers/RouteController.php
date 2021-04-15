<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Route;

class RouteController extends BaseController
{
//    route
    public function shRoute(){
        return view('uz/map/route/shRoute');
    }
    public function xonbandiRoute(){
        return view('uz/map/route/shRoute');
    }
    public function qorovultepaRoute(){
        return view('uz/map/route/shRoute');
    }
    public function qirqqizRoute(){
        return view('uz/map/route/shRoute');
    }
    public function zominRoute(){
        return view('uz/map/route/shRoute');
    }
    public function baxmalRoute(){
        return view('uz/map/route/shRoute');
    }
    public function uobsoyRoute(){
        return view('uz/map/route/shRoute');
    }
    public function amirtemurRoute(){
        return view('uz/map/route/shRoute');
    }
}
