@extends('layout')
@section('title', 'Shops')

@section('content')

    <h1>Shops:</h1>
    @foreach($shops as $shop)
        <div style="display: flex; background-color: bisque">
            @if($shop->id % 2==0)
                <img src="https://igorzuevich.com/wp-content/uploads/2016/01/shop-icon.png"
                     style="width: 200px">
            @else
                <img
                    src="https://png2.cleanpng.com/sh/930eb224cb0a7687ccee95249ec7874c/L0KzQYm3VMA1N6N3iZH0aYP2gLBuTfNwdaF6jNd7LXnmf7B6Tfdzd5Rqius2c4Tygra0kBhweKFuhtk2cHzkc7b6TcVia2Y4SNgBMUHldIm4TsY2PWc4UasCMUW1QomAUsU3PmE8Sqk3cH7q/kisspng-computer-icons-grocery-store-shopping-places-5ac530f611bd81.6556399715228725660727.png"
                    style="width: 200px">
            @endif
            <div><a href="{{route('shop', $shop->id)}}">{{$shop->name}}</a>
                , the owner of this shop is
                <a href="{{route('supplier', $shop->supplier)}}">{{$shop->supplier->name}}</a>
                <br>

                U can buy these donuts here:
                <ul>
                    @foreach($shop->donuts as $donut)

                        <li>
                            <a href="{{route('landing.donut', $donut->id)}}">{{$donut->name}}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <br>
    @endforeach

@endsection
