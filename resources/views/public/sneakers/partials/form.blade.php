<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control {{ $errors->has('name')?"is-invalid":"" }}" id="name" name="name" placeholder="Introduce the sneakers's name" value="{{ isset($sneaker)?$sneaker->name:old('name') }}" required>
    @if( $errors->has('name'))
    <div class="invalid-feedback">
        {{ $errors->first('name') }}
    </div>
    @endif
</div>
<div class="form-group">
    <div class="row d-flex align-items-end">
        <div class="col-10">
            <label for="brand">Brand</label>
            <select class="form-control {{ $errors->has('brand')?"is-invalid":"" }}" id="brand" name="brand">
              @foreach($brands as $brand)
                  <option value="{{ $brand->id }}"
                  @if( ! $errors->isEmpty() )
                    {{-- Aquí se entra cuando hay errores de validación --}}
                    {{ old('brand')==$brand->id?" selected":"" }}
                  @elseif( isset($sneaker) )
                    {{-- Aquí se entra cuando se carga el formulario de edición de libro --}}
                    {{ $brand->id==$sneaker->brand_id?"selected":"" }}
                  @endif
                  >{{ $brand->name }}</option>
              @endforeach
            </select>
            @if( $errors->has('brand') )
            <div class="invalid-feedback">
                {{ $errors->first('brand') }}
            </div>
            @endif
</div>
<div class="form-group">
    <label for="release">Release</label>
    <input type="text" class="form-control {{ $errors->has('release')?"is-invalid":"" }}" id="release" name="release" placeholder="Introduce the release date (March, 2015)" value="{{ isset($sneaker)?$sneaker->release:old('release') }}"required>
    @if( $errors->has('release'))
    <div class="invalid-feedback">
        {{ $errors->first('release') }}
    </div>
    @endif
</div>
<div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control {{ $errors->has('price')?"is-invalid":"" }}" id="price" name="price" placeholder="Introduce the price" value="{{ isset($sneaker)?$sneaker->price:old('price') }}"required>
    @if( $errors->has('price'))
    <div class="invalid-feedback">
        {{ $errors->first('price') }}
    </div>
    @endif
</div>
<div class="form-group">
    <label for="sport">Sport</label>
    <input type="text" class="form-control {{ $errors->has('sport')?"is-invalid":"" }}" id="sport" name="sport" placeholder="Introduce the sport you can practice with the sneakers" value="{{ isset($sneaker)?$sneaker->sport:old('sport') }}"required>
    @if( $errors->has('sport'))
    <div class="invalid-feedback">
        {{ $errors->first('sport') }}
    </div>
    @endif
</div>
<div class="form-group">
    <label for="colorway">Colorway</label>
    <input type="text" class="form-control {{ $errors->has('colorway')?"is-invalid":"" }}" id="colorway" name="colorway" placeholder="Introduce the colorway of the sneakers (Triple Black)" value="{{ isset($sneaker)?$sneaker->colorway:old('colorway') }}"required>
    @if( $errors->has('colorway'))
    <div class="invalid-feedback">
        {{ $errors->first('colorway') }}
    </div>
    @endif
</div>
<div class="form-group">
    <label for="size">Size</label>
    <input type="text" class="form-control {{ $errors->has('size')?"is-invalid":"" }}" id="size" name="size" placeholder="Introduce the size in US format (US 10)" value="{{ isset($sneaker)?$sneaker->size:old('size') }}"required>
    @if( $errors->has('size'))
    <div class="invalid-feedback">
        {{ $errors->first('size') }}
    </div>
    @endif
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control {{ $errors->has('description')?"is-invalid":"" }}" id="description" name="description" rows="10" placeholder="Introduce sneakers description" required>{{ isset($sneaker)?$sneaker->description:old('description') }}</textarea>
    @if( $errors->has('description'))
    <div class="invalid-feedback">
        {{ $errors->first('description') }}
    </div>
    @endif
</div>
