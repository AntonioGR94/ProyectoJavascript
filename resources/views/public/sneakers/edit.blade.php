@extends('public.layout')

@section('title', 'Edit sneakers')

@section('content')
<form action="/sneakers/{{ $sneaker->id }}" method="post" novalidate>

    @csrf
    @method('patch')

    @include('public.sneakers.partials.form')

    <button type="submit" class="btn btn-primary">Save sneakers</button>
</form>
@endsection
