@extends('public.layout')

@section('title', 'Sneaker Info')

@section('content')
    <h2>{{ $sneaker->name }}</h2>
    <h4>{{ $sneaker->brand->name }}</h4>
    <p>{{ $sneaker->description }}</p>
@endsection
