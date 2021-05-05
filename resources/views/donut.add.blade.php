@extends('layout')
@section('title', 'Add donut')

@section('content')
    <form method="post">
        @csrf
        <input name="name" placeholder="Name" />
        <input name="price" type="number" placeholder="Price $" />
        <textarea name="description" placeholder="Description"></textarea>
        <input name="price" type="number" placeholder="Price $" />
        <label>Supplier:</label>
        <select>
            <option></option>
        </select>
        <input type="submit" value="Add" name="send" />
    </form>
@endsection
