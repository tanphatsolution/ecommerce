@extends('layouts.crud._form')

@push('prestyles')
{{ HTML::style('vendor/jasny-bootstrap/css/jasny-bootstrap.min.css') }}
<style>
	.fileinput, .fileinput .fileinput-preview {
		width: 100%;
	}
	.fileinput .fileinput-preview {
		width: 100%;
		border-radius: 0;
	}
	.fileinput .fileinput-preview img {
		height: 150px;
	}

</style>
@endpush

@push('form-fields')
<div class="form-group">
	<div class="row">
		<div class="col-sm-6">
			{{ Form::label('name', 'Name', ['class'=>'control-label']) }}
    		{{ Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'required: Name']) }}
		</div>
		<div class="col-sm-6">
			{{ Form::label('link', 'Link', ['class'=>'control-label']) }}
    		{{ Form::text('link',null, ['class' => 'form-control', 'placeholder' => 'required: Link']) }}
		</div>
	</div>
</div>

<div class="form-group">
	@include('backend._partials.form.form-group-image', ['imageName' => 'image','value'=> isset($item) ? $item->image_default : null,'height' => '150px'])
</div>

<div class="form-group">
	<div class="checkbox">
        <label>
            {{ Form::checkbox('locked', true, old('locked'), ['data-toggle'=>'toggle','data-size' => 'small']) }}	<b>Locked  </b>
        </label>
    </div>
</div>
@endpush

@push('prescripts')
{{ HTML::script('vendor/jasny-bootstrap/js/jasny-bootstrap.min.js') }}
@endpush


