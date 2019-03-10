@extends('public.layout')

@section('title', 'Edit sneakers')

@section('content')
<form action="/brands/{{ $brand->id }}" data-idBrand="{{ $brand->id }}" id="editarBrand" method="post" novalidate>

    @csrf
    @method('patch')

    @include('public.brands.partials.form')

    <button type="submit" class="btn btn-primary">Save changes</button>
</form>
@endsection
@push('scripts')
    <script src="{{ mix('/js/crud/edit.js') }}" defer ></script>
@endpush