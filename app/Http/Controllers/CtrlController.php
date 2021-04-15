<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CtrlController extends BaseController
{
    private $id;
    private $coords = '39.6373643,68.4768834,17.78';
    public function sherbuloq(){
        return view('uz/sherbuloq');
    }
    public function xonbandi(){
        return view('uz/xonbandi');
    }
    public function qorovultepa(){
        return view('uz/qorovultepa');
    }
    public function qirqqiz(){
        return view('uz/qirqqiz');
    }
    public function zomin(){
        return view('uz/zomin');
    }
    public function baxmal(){
        return view('uz/baxmal');
    }
    public function uobsoy(){
        return view('uz/uobsoy');
    }
    public function amirtemur(){
        return view('uz/amirtemur');
    }
    public function chortangi(){
        return view('uz/chortangi');
    }

}
