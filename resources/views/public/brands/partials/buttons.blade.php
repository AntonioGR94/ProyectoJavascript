@auth

<a href="/brands/{{ $brand->id }}/edit" class="btn btn-warning btn-sm mr-2 float-right">Edit</a>
<form action="/brands/{{ $brand->id }}" method="post" class="mr-2 float-right">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger btn-sm">Delete Book</button>
</form>

@endauth
