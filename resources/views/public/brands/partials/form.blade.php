<div class="form-group">
    <label for="name">Brand name</label>
    <input type="text" class="name" id="name" name="name" placeholder="Introduce the brand's name" value="{{ isset($brand)?$brand->name:old('name') }}" required>
    @if( $errors->has('name'))
    <div class="invalid-feedback">
        {{ $errors->first('name') }}
    </div>
    @endif
</div>
<div class="form-group">
    <label for="release">Web</label>
    <input type="text" class="url" id="url" name="url" placeholder="Introduce web page." value="{{ isset($brand)?$brand->url:old('url') }}" required>
    @if( $errors->has('url'))
    <div class="invalid-feedback">
        {{ $errors->first('url') }}
    </div>
    @endif
</div>
<div class="form-group">
    <label for="createDate">Create Date</label>
    <input type="text" class="createDate" id="createDate" name="createDate" placeholder="Introduce the creation date, ex: April 1925" value="{{ isset($brand)?$brand->createDate:old('createDate') }}" required>
    @if( $errors->has('createDate'))
    <div class="invalid-feedback">
        {{ $errors->first('createDate') }}
    </div>
    @endif
</div>
