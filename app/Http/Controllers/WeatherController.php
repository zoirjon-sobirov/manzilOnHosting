<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Route;

class WeatherController extends BaseController
{
    private $sher_coords = 12221;
    //    weather
    public function sherbuloqWeatherPlace1(){
        return view('uz/weather/sh1');
    }
    public function sherbuloqWeatherPlace(){
        return view('uz/weather/sh');
    }
    public function xonbandiWeatherPlace1(){
        return view('uz/weather/x1');
    }
    public function xonbandiWeatherPlace(){
        return view('uz/weather/x');
    }
    public function qorovultepaWeatherPlace1(){
        return view('uz/weather/q1');
    }
    public function qorovultepaWeatherPlace(){
        return view('uz/weather/q');
    }
    public function qirqqizWeatherPlace1(){
        return view('uz/weather/qirq1');
    }
    public function qirqqizWeatherPlace(){
        return view('uz/weather/qirq');
    }
    public function zominWeatherPlace1(){
        return view('uz/weather/z1');
    }
    public function zominWeatherPlace(){
        return view('uz/weather/z');
    }
    public function baxmalWeatherPlace1(){
        return view('uz/weather/b1');
    }
    public function baxmalWeatherPlace(){
        return view('uz/weather/b');
    }
    public function uobsoyWeatherPlace1(){
        return view('uz/weather/u1');
    }
    public function uobsoyWeatherPlace(){
        return view('uz/weather/u');
    }
    public function amirtemurWeatherPlace1(){
        return view('uz/weather/a1');
    }
    public function amirtemurWeatherPlace(){
        return view('uz/weather/a');
    }

}
