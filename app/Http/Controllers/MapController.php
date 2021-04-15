<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Route;

class MapController extends BaseController
{
    private $sher_coords = 12221;
//    private $sher_coords = '39.6373643,68.4768834,17.78';

    //root
    public function sherbuloqMap(){
        return view('uz/map/sherbuloq');
    }
    public function xonbandiMap(){
        return view('uz/map/xonbandi');
    }
    public function qorovultepaMap(){
        return view('uz/map/qorovultepa');
    }
    public function qirqqizMap(){
        return view('uz/map/qirqqiz');
    }
    public function zominMap(){
        return view('uz/map/zomin');
    }
    public function baxmalMap(){
        return view('uz/map/baxmal');
    }
    public function uobsoyMap(){
        return view('uz/map/uobsoy');
    }
    public function amirtemurMap(){
        return view('uz/map/amirtemur');
    }
//    Map
    public function sherbuloqMapPlace1(){
        return view('uz/map/place/sh1');
    }
    public function sherbuloqMapPlace(){
        return view('uz/map/place/sh');
    }
    public function xonbandiMapPlace1(){
        return view('uz/map/place/x1');
    }
    public function xonbandiMapPlace(){
        return view('uz/map/place/x');
    }
    public function qorovultepaMapPlace1(){
        return view('uz/map/place/q1');
    }
    public function qorovultepaMapPlace(){
        return view('uz/map/place/q');
    }
    public function qirqqizMapPlace1(){
        return view('uz/map/place/qirq1');
    }
    public function qirqqizMapPlace(){
        return view('uz/map/place/qirq');
    }
    public function zominMapPlace1(){
        return view('uz/map/place/z1');
    }
    public function zominMapPlace(){
        return view('uz/map/place/z');
    }
    public function baxmalMapPlace1(){
        return view('uz/map/place/b1');
    }
    public function baxmalMapPlace(){
        return view('uz/map/place/b');
    }
    public function uobsoyMapPlace1(){
        return view('uz/map/place/u1');
    }
    public function uobsoyMapPlace(){
        return view('uz/map/place/u');
    }
    public function amirtemurMapPlace1(){
        return view('uz/map/place/a1');
    }
    public function amirtemurMapPlace(){
        return view('uz/map/place/a');
    }
}
