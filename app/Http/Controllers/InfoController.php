<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Route;

class InfoController extends BaseController
{
    //    info
    public function sherbuloqInfoPlace(){
        return view('uz/info/sh');
    }
    public function xonbandiInfoPlace(){
        return view('uz/info/x');
    }
    public function qorovultepaInfoPlace(){
        return view('uz/info/q');
    }
    public function qirqqizInfoPlace(){
        return view('uz/info/qirq');
    }
    public function zominInfoPlace(){
        return view('uz/info/z');
    }
    public function baxmalInfoPlace(){
        return view('uz/info/b');
    }
    public function uobsoyInfoPlace(){
        return view('uz/info/u');
    }
    public function amirtemurInfoPlace(){
        return view('uz/info/a');
    }

}
