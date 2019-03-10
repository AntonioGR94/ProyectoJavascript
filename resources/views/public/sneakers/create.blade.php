@extends('public.layout')

@section('title', 'Add sneakers')

@section('content')
<h1>Register Sneakers to sell</h1>
<form action="/sneakers" method="post" novalidate>
    @csrf
    @include('public.sneakers.partials.form')
    <button type="submit" class="btn btn-primary">Add sneakers</button>
</form>
@endsection
