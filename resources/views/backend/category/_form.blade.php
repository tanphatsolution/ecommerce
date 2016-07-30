@push('prestyles')
{{ HTML::style('vendor/jasny-bootstrap/css/jasny-bootstrap.min.css') }}
@endpush
<div class="form-group">
	<div class="row">
		<div class="col-md-6">
			{{ Form::label('name', 'Name', ['class'=>'control-label']) }}
    		{{ Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'required: name']) }}
		</div>

		<div class="col-md-6">
			{{ Form::label('parent_id', 'Root', ['class'=>'control-label']) }}
			{!! Form::select('parent_id',$listItems, null,['class' => 'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	{{ Form::label('name', 'Description', ['class'=>'control-label']) }}
	{{ Form::textarea('description',null, ['class' => 'form-control','rows'=>'3', 'placeholder'=>'Description...']) }}
</div>

@if ($type == 'product')
<div class="form-group">
	<div class="row">
		<div class="col-sm-6">
			@include('backend._partials.form.form-group-image', ['imageName' => 'image','height' => '150px','value' => (isset($image)) ? $image : null])
		</div>
		<div class="col-sm-6">
			@include('backend._partials.form.form-group-image', ['imageName' => 'banner','height' => '150px','value' => (isset($banner) && $banner) ? $banner->image_thumbnail : null])
		</div>
	</div>
</div>
@endif

<div class="form-group">
	<div class="checkbox">
        <label>
            {{ Form::checkbox('locked', true, old('locked'), ['data-toggle'=>'toggle','data-size' => 'small']) }}	<b>Locked</b>
        </label>
    </div>
</div>

<hr>
<div class="form-group">
	<a href="javascript:window.history.back()" class="btn btn-default btn-sm" ><i class="fa fa-arrow-circle-left"></i> Back</a>
    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Save</button>
    @if (isset($item))
    <a href="{{route('backend.category.type',$item->type)}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create</a>
    @endif
</div>

@push('prescripts')
{{ HTML::script('vendor/jasny-bootstrap/js/jasny-bootstrap.min.js') }}
@endpush