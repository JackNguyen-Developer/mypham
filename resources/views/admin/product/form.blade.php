<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $product->name or ''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
    <label for="slug" class="col-md-4 control-label">{{ 'Slug' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="slug" type="text" id="slug" value="{{ $product->slug or ''}}" >
        {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('info') ? 'has-error' : ''}}">
    <label for="info" class="col-md-4 control-label">{{ 'Info' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="info" type="textarea" id="info" >{{ $product->info or ''}}</textarea>
        {!! $errors->first('info', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="col-md-4 control-label">{{ 'Description' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ $product->description or ''}}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="col-md-4 control-label">{{ 'Price' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="price" type="number" id="price" value="{{ $product->price or ''}}" >
        {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('thumbnail') ? 'has-error' : ''}}">
    <label for="thumbnail" class="col-md-4 control-label">{{ 'Thumbnail' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="thumbnail" type="text" id="thumbnail" value="{{ $product->thumbnail or ''}}" >
        {!! $errors->first('thumbnail', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('review') ? 'has-error' : ''}}">
    <label for="review" class="col-md-4 control-label">{{ 'Review' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="review" type="number" id="review" value="{{ $product->review or ''}}" >
        {!! $errors->first('review', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('order_sort') ? 'has-error' : ''}}">
    <label for="order_sort" class="col-md-4 control-label">{{ 'Order Sort' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="order_sort" type="number" id="order_sort" value="{{ $product->order_sort or ''}}" >
        {!! $errors->first('order_sort', '<p class="help-block">:message</p>') !!}
    </div>
</div>

{{--<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">--}}
    {{--<label for="status" class="col-md-4 control-label">{{ 'Status' }}</label>--}}
    {{--<div class="col-md-6">--}}
        {{--<input class="form-control" name="status" type="number" id="status" value="{{ $product->status or ''}}" >--}}
        {{--{!! $errors->first('status', '<p class="help-block">:message</p>') !!}--}}
    {{--</div>--}}
{{--</div>--}}
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('active', ['Hidden', 'Show'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('brand') ? 'has-error' : ''}}">
    <label for="brand" class="col-md-4 control-label">{{ 'Brand' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="brand" type="text" id="brand" value="{{ $product->brand or ''}}" >
        {!! $errors->first('brand', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('brand_id') ? 'has-error' : ''}}">
    {!! Form::label('brand_id', 'Brand', ['class' => '']) !!}
    <div class="">
        {!! Form::select('brand_id', $brands, null, ['class' => 'form-control']) !!}
        {!! $errors->first('brand_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="col-md-4 control-label">{{ 'Category' }}</label>
    <div class="col-md-6">
        @foreach($categories as $item)
            @php
                $checked = '';//is_numeric(array_search($c['id'].'-'.$t['id'], $courseTypeArr)) ? true : false;
            @endphp
            <div class="checkbox">
                <label>{!! Form::checkbox('product_category[]', $item->title, $checked) !!} {{$item->title}}</label><br>
            </div>
        @endforeach

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
