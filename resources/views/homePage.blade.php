@extends('layout')
@section('title', 'Home')

@section('content')
    <style>
        @keyframes rotation {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes rotation-reverse {
            from {
                transform: rotate(360deg);
            }
            to {
                transform: rotate(0deg);
            }
        }

        img {
            animation: rotation 3s ease-in-out infinite;
            position: relative;
        }

        .kukuDonut {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .kuku {
            position: absolute;
            width: 110px;
            animation: rotation-reverse 3s ease-in-out infinite;

        }
    </style>

    <div style="text-align: center"><h1>Welcome to the DONUT world!</h1>
        <p>we count the amount of donuts produces every second in the world</p>
        <a href="https://www.instagram.com/anastasiiakuzyk/" target="_blank">
            <div class="kukuDonut">
                <img src="/kuku.jpeg" class="kuku">
                <img src="http://pngimg.com/uploads/donut/donut_PNG63.png" style="width: 400px; " alt="DONUT">
            </div>
        </a>
        <p>if you want to support us, U can <a href="https://send.monobank.ua/jar/3Y5VDhqAU1" target="_blank">DONATE</a>
            :)
        </p>
        <p>there are some links on our products:</p>
        <a href="{{route('landing.contact')}}">contact us</a>
        <a href="{{route('landing.donuts')}}">list of donuts</a>
    </div>

@endsection
