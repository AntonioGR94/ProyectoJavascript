@forelse($sneakers as $sneaker)
    <div class="card mb-2">
        <div class="card-header">
            {{ $sneaker->name }}
        </div>
        <div data-idSneaker='{{$sneaker->id}}' class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">{{ $sneaker->brand->name}}</h6>
            <p class="card-text">{{ str_limit($sneaker->description, 300) }}</p>

            @include('public.sneakers.partials.buttons')

            <a href="/sneakers/{{ $sneaker->slug }}" class="btn btn-primary btn-sm mr-2 float-right">More Info</a>
           

    </div>
</div>


    @empty
      <p>There arent sneakers</p>
    @endforelse