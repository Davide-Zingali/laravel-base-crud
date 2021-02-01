@extends('layouts.main-layout')
@section('content')
    
    <main>
        <h2>
            MAIN
        </h2>
        <div>
            <ul>
                <li>
                    Name: {{$arrayDevice -> name}} <br> 
                    Model: {{$arrayDevice -> model}} <br>
                    Price: {{$arrayDevice -> price}} $ <br>
                    Consumption: {{$arrayDevice -> consumption}} Watt
                </li>
                <br>
            </ul>
        </div>
    </main>

@endsection