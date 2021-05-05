@extends('layout')
@section('title', $shop->name)

@section('content')
    <h1>{{$shop->name}}</h1>
    @if($shop->id % 2==0)
        <img src="https://igorzuevich.com/wp-content/uploads/2016/01/shop-icon.png" style="width: 200px">
    @else
        <img
            src="https://png2.cleanpng.com/sh/930eb224cb0a7687ccee95249ec7874c/L0KzQYm3VMA1N6N3iZH0aYP2gLBuTfNwdaF6jNd7LXnmf7B6Tfdzd5Rqius2c4Tygra0kBhweKFuhtk2cHzkc7b6TcVia2Y4SNgBMUHldIm4TsY2PWc4UasCMUW1QomAUsU3PmE8Sqk3cH7q/kisspng-computer-icons-grocery-store-shopping-places-5ac530f611bd81.6556399715228725660727.png"
            style="width: 200px">
    @endif
    <p>Address: {{$shop->location}}</p>
    <p>Supplier of this shop is -
        <a href="{{route('supplier', $shop->supplier->id)}}">{{$shop->supplier->name}}</a></p>
    <hr>
    <h2>Donuts in this shop:</h2>
    @foreach($shop->donuts as $donut)
        <x-donut-element>
            <x-slot name="name">
                {{$donut->name}}
            </x-slot>
            <x-slot name="price">
                {{$donut->price}}
            </x-slot>
            <x-slot name="img">
                {{$donut->image}}
            </x-slot>
            <x-slot name="id">
                {{$donut->id}}
            </x-slot>
        </x-donut-element>
    @endforeach

@endsection
