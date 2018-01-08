<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="col-md-4 control-label">{{ 'Title' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="title" type="text" id="title" value="{{ $brand->title or ''}}" >
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
    <label for="slug" class="col-md-4 control-label">{{ 'Slug' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="slug" type="text" id="slug" value="{{ $brand->slug or ''}}" >
        {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('note') ? 'has-error' : ''}}">
    <label for="note" class="col-md-4 control-label">{{ 'Note' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="note" type="textarea" id="note" >{{ $brand->note or ''}}</textarea>
        {!! $errors->first('note', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('order_sort') ? 'has-error' : ''}}">
    <label for="order_sort" class="col-md-4 control-label">{{ 'Order Sort' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="order_sort" type="number" id="order_sort" value="{{ $brand->order_sort or ''}}" >
        {!! $errors->first('order_sort', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('status', ['Hidden', 'Show'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('thumbnail') ? 'has-error' : ''}}">
    <label for="thumbnail" class="col-md-4 control-label">{{ 'Thumbnail' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="thumbnail" type="file" id="thumbnail" {{--value="{{ $product->thumbnails or ''}}"--}} >
        {{--<span class="btn btn-primary">--}}
        {{--Browse… {!! Form::file('thumbnails', array('style'=>'display:none;', 'id'=>'thumbnails', 'onchange'=>'change(thumbnail)')) !!}--}}
        {{--</span>--}}
        {!! $errors->first('thumbnail', '<p class="help-block">:message</p>') !!}
    </div>
</div>
{{--<div class="form-group {{ $errors->has('thumbnail') ? 'has-error' : ''}}">--}}
    {{--<label for="thumbnail" class="col-md-4 control-label">{{ 'Thumbnail' }}</label>--}}
    {{--<div class="col-md-6">--}}
        {{--<input class="form-control" name="thumbnail" type="text" id="thumbnail" value="{{ $brand->thumbnail or ''}}" >--}}
        {{--{!! $errors->first('thumbnail', '<p class="help-block">:message</p>') !!}--}}
    {{--</div>--}}
{{--</div>--}}

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
