@extends('layouts.app')

@section('title', 'Sneakers90s')

@section('content')
<form class="navbar-form navbar-left hidden-xs" id="formBuscar" method="post" role="search">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-search"></i></span>
        <input type="text" class="form-control" id="busqueda" data-toggle="modal" placeholder="Buscar">
    </div>
    <input type="submit" id="buscar" value="Buscar">
</form>
<div id="sneakersMostrar">
<h1>Sneakers List</h1>



    

    @forelse($sneakers as $sneaker)
    <div class="card mb-2">
        <div class="card-header">
            {{ $sneaker->name }}
        </div>
        <div data-idSneaker='{{$sneaker->id}}' class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">{{ $sneaker->brand->name}}</h6>
            <p class="card-text">{{ str_limit($sneaker->description, 300) }}</p>

            @include('public.sneakers.partials.buttons')

            <a href="/sneakers/{{ $sneaker->slug }}" id="mostrarSneaker" data-slugSneaker="{{ $sneaker->slug }}"  class="btn btn-primary btn-sm mr-2 float-right">More Info</a>
           

    </div>
</div>


    @empty
      <p>There arent sneakers</p>
    @endforelse
    </div>
<div class="spinner-border" id="spinner" role="status">
        <span class="sr-only">Loading...</span>
    </div>

   
@endsection
@push('scripts')
    <script src="{{ mix('/js/crud/read.js') }}" defer ></script>
    <script src="{{ mix('/js/paginate/paginate.js') }}" defer ></script>
    <script src="{{ mix('/js/busqueda/busqueda.js') }}" defer ></script>
@endpush