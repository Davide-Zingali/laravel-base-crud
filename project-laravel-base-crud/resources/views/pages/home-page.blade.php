@extends('layouts.main-layout')
@section('content')
    
    <main>
        <h2>
            MAIN
        </h2>
        <div>
            <ul>
                @foreach ($arrayDevices as $item)
                    <li>
                        <a href="{{route('rotta-show', $item -> id)}}">
                            Name: {{$item -> name}}; 
                            Model: {{$item -> model}}
                        </a>
                    </li>
                    <br>
                @endforeach

            </ul>
        </div>
    </main>

@endsection