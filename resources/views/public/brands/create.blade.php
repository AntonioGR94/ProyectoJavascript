@extends('layouts.app')

@section('title', 'Register a Brand')

@section('content')
<h1>Register a Brand</h1>
<form action="/brands" method="post" id="brandForm" novalidate>
    @csrf
    @include('public.brands.partials.form')
    <button type="submit" class="btn btn-primary">Register Brand</button>
</form>
<div id="brandsCreadas">



</div>
@endsection
@push('scripts')
    <script src="{{ mix('/js/validaciones/validacionFormularioBrand.js') }}" defer ></script>
    <script src="{{ mix('/js/crud/create.js') }}" defer ></script>

@endpush
@push('estilos')
    <link href="{{ mix('css/formularios/formularioBrand.css') }}" rel="stylesheet">
@endpush
