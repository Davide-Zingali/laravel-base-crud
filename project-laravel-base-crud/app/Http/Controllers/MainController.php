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

    public function store(Request $request) {
        // dd($request -> all());
        
        $newDevice = new Device;
        $newDevice -> name = $request -> get('name');
        $newDevice -> price = $request -> get('price');
        $newDevice -> model = $request -> get('model');
        $newDevice -> consumption = $request -> get('consumption');
        $newDevice -> save();

        return redirect() -> route('rotta-index');
    }
}
