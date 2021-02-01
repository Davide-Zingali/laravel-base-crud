<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Device;

class MainController extends Controller
{
    public function index() {
        $arrayDevices = Device::all();
        // dd($arrayDevices);
        return view('pages.home-page', compact('arrayDevices'));
    }

    public function show($id) {
        $arrayDevice = Device::FindOrFail($id);
        // dd($arrayDevices);
        return view('pages.device-page', compact('arrayDevice'));
    }

    public function create() {
        return view('pages.input-page');
    }
}
