<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Device;

class MainController extends Controller
{
    public function index() {
        $arrayDevices = Device::all();
        dd($arrayDevices);
        // return view('pages.home-page', compact('$arrayDevices'));
    }
}
