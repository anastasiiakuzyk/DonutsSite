@extends('layout')
@section('title', 'Donuts')

@section('content')
    <form>
        <select name="sortDonuts">
            <option value="Disabled" {{$selectValue === 'Disabled'? 'selected' : ''}}>Disabled</option>
            <option value="PriceUP" {{$selectValue === 'PriceUP'? 'selected' : ''}}>Price(UP)</option>
            <option value="PriceDOWN" {{$selectValue === 'PriceDOWN'? 'selected' : ''}}>Price(DOWN)</option>
        </select>
        <input type="submit" value="Chose">
        <input type="hidden" name="search" value="{{app('request')->input('search')}}">
    </form>
    @if(count($donuts)==0)
        <h3>There are no donuts 😰</h3>
    @endif
    @foreach($donuts as $donut)
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
