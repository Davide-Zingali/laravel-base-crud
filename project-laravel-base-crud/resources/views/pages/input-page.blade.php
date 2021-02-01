@extends('layouts.main-layout')
@section('content')
    <main>
        <h2>Input</h2>
        <div>
            <form action="{{route('rotta-store')}}" method="post">
                @csrf
                @method('POST')

                <label for="name">Name: </label>
                <input type="text" name="name">
                <br>
                <label for="price">Price: </label>
                <input type="text" name="price">
                <br>
                <label for="model">Model: </label>
                <input type="text" name="model">
                <br>
                <label for="consumption">Consumption: </label>
                <input type="text" name="consumption">
                <br>
                <input type="submit" value="Salva">

            </form>
        </div>
    </main>
@endsection