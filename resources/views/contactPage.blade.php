@extends('layout')
@section('title', 'Contact')

@section('content')
@if (isset($submitted))
    @if ($error)
        <form action="{{route('landing.form')}}" method="post">
            @csrf
            <input type="text" name="donutName" placeholder="Enter a name of donut that U like π₯Ίπ"
                   style="width: 50%; font-size: 20px"/>
            <input type="text" name="userName" placeholder="Enter your name" style="width: 50%; font-size: 20px"/>
            <br>
            <input type="submit" value="π©" style="font-size: 40px">
        </form>
        <p>{{$error}}</p>
    @else
        <p>Thank U for your info, {{$user}} π€©</p>
        <p>your favourite donut is - {{$donut}} π</p>
    @endif
@else
    <form action="{{route('landing.form')}}" method="post">
        @csrf
        <input type="text" name="donutName" placeholder="Enter a name of donut that U like π₯Ίπ"
               style="width: 50%; font-size: 20px"/>
        <input type="text" name="userName" placeholder="Enter your name" style="width: 50%; font-size: 20px"/>
        <br>
        <input type="submit" value="π©" style="font-size: 40px">
    </form>
@endif

@endsection
