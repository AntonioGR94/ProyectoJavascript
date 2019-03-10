@extends('layouts.app')

@section('title', 'Brand Info')

@section('content')
<div class="card mb-2">
        <div class="card-header">
            {{ $brand->name }}
        </div>
        <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted"></h6>
            <a class="card-link" href="{{ $brand->url }}">{{ $brand->url }}</a>
            <p class="card-text">{{ $brand->createDate }}</p>


            @include('public.brands.partials.buttons')

            <a href="/brands/{{ $brand->slug }}" class="btn btn-primary btn-sm mr-2 float-right">More Info</a>
@endsection