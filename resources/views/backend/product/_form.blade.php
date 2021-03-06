@extends('layouts.crud._form')

@push('prestyles')
{{ HTML::style("vendor/summernote/css/summernote.css") }}
{{ HTML::style("vendor/select2/css/select2.min.css") }}
<style>
	.select2-container--default .select2-selection--multiple .select2-selection__choice {
		border-radius: 0;
	}
	.select2-container--default .select2-selection--multiple {
		border-radius: 0;
		border: 1px solid #ccc;
	}
	.select2-container--default .select2-selection--single {
		border-radius: 0;
		height: 34px;
	}
	.animated {
		animation-fill-mode: none;
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
			{{ Form::label('name', 'Code', ['class'=>'control-label']) }}
    		{{ Form::text('code',null, ['class' => 'form-control', 'placeholder' => 'required: #Code']) }}
		</div>
	</div>
</div>

<div class="form-group">
	{{ Form::label('name', 'Price / Sale', ['class'=>'control-label']) }}
	<div class="row">
		<div class="col-sm-6">
			<div class="input-group">
				<span class="input-group-addon">{{ Form::radio('sale',false,true) }}</span>
    			{{ Form::number('price',null, ['class' => 'form-control currency-mask', 'placeholder' => 'Price Listed']) }}
			</div>
		</div>
		<div class="col-sm-6">
			<div class="input-group">
				<span class="input-group-addon">{{ Form::radio('sale',true) }}</span>
				{{ Form::number('price_sale',null, ['class' => 'form-control', 'placeholder' => 'Price Sale']) }}
			</div>
		</div>
	</div>
</div>

<div class="form-group">
	{{ Form::label('description', 'Content', ['class'=>'control-label']) }}
    {{ Form::textarea('description',null, ['class' => 'form-control textarea-summernote']) }}
</div>

<div class="form-group">
	<div class="row">
		<div class="col-sm-6">
			{{ Form::label('tags', 'Tags', ['class'=>'control-label']) }}
    		{{ Form::select('tags[]', isset($tags) ? $tags : [], isset($tags) ? $tags : [], ['class' => 'form-control', 'multiple' => true]) }}
		</div>
		<div class="col-sm-6">
			{{ Form::label('provider_id', 'Providers', ['class'=>'control-label']) }}
    		{{ Form::select('provider_id', $listProvider, null, ['class' => 'form-control select2-provider']) }}
		</div>	
	</div>
</div>

<div class="form-group" id="dropzone-form">
	{{ Form::label('images[]', 'Images') }}
    <upload-image @if(isset($item)) :images="item.images" @endif></upload-image>
</div>

<div class="form-group">
	<div class="checkbox">
        <label>
            {{ Form::checkbox('locked', true, old('locked'), ['data-toggle'=>'toggle','data-size' => 'small']) }}	<b>Locked  </b>
        </label>
    </div>
</div>
@endpush

@push('form-partials')
@include('backend._partials.form.image', ['imageName' => 'image'])
@include('backend._partials.form.category', ['rootCategories' => $rootCategories])
@include('backend.product._property')
@endpush

@push('prescripts')
<script>
	var item = {!! $item or '{}' !!};
</script>
{{ HTML::script('vendor/summernote/js/summernote.min.js') }}
{{ HTML::script('vendor/select2/js/select2.min.js') }}
{{ HTML::script(elixir('assets/vue/backend/dropzone.js')) }}
<script>
	var route = laroute.route('backend.product.tags');
	$(function () {
		$('.textarea-summernote').summernote({
		  	height:200,
		  	toolbar: [
			    ['style', ['bold', 'italic', 'underline', 'clear']],
			    ['fontsize', ['fontsize']],
			    ['insert', ['link','picture','video']],
			    ['misc', ['fullscreen','undo','redo']]
			],
			callbacks: {
			  	onImageUpload: function(files) {
                    sendImage(files[0], laroute.route('backend.summernote.image'), $(this));
                }
            }
		});
		select2Init(route);
		$(".select2-provider").select2();

	})
</script>
@endpush