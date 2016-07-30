@extends('layouts.crud._form')


@push('prestyles')
{{ HTML::style("vendor/summernote/css/summernote.css") }}
<style>
	.animated {
		animation-fill-mode: none;
	}
</style>
@endpush

@push('form-fields')
<div class="form-group">
	<div class="row">
		<div class="col-sm-6">
			{{ Form::label('email', 'Email', ['class'=>'control-label']) }}
    		{{ Form::text('email',$items->keyBy('key')['email']['value'], ['class' => 'form-control', 'placeholder' => 'required: Email']) }}
		</div>
		<div class="col-sm-6">
			{{ Form::label('phone', 'Phone', ['class'=>'control-label']) }}
    		{{ Form::text('phone',$items->keyBy('key')['phone']['value'], ['class' => 'form-control', 'placeholder' => 'required: Phone']) }}
		</div>
	</div>
</div>

<div class="form-group">
	{{ Form::label('address', 'Address', ['class'=>'control-label']) }}
    {{ Form::text('address',$items->keyBy('key')['address']['value'], ['class' => 'form-control', 'placeholder' => 'required: Address']) }}
</div>
<hr>

<div class="form-group">
	{{ Form::label('slogan', 'Slogan', ['class'=>'control-label']) }}
    {{ Form::textarea('slogan',$items->keyBy('key')['slogan']['value'], ['class' => 'form-control','rows'=>'3', 'placeholder'=>'Slogan']) }}
</div>

<div class="form-group">
	{{ Form::label('introduce', 'Introduce', ['class'=>'control-label']) }}
    {{ Form::textarea('introduce',$items->keyBy('key')['introduce']['value'], ['class' => 'form-control textarea-summernote']) }}
</div>
<hr>

<div class="form-group">
	{{ Form::label('scripts', 'Scripts', ['class'=>'control-label']) }}
    {{ Form::textarea('scripts',$items->keyBy('key')['scripts']['value'], ['class' => 'form-control','rows'=>'6', 'placeholder'=>'Scripts']) }}
</div>

@endpush

@push('form-partials')
@include('backend.config._seo')
@include('backend.config._social')
@include('backend.config._image', ['imageName' => 'logo','value'=>$items->keyBy('key')['logo']['logo']])
@endpush


@push('prescripts')
{{ HTML::script('vendor/summernote/js/summernote.min.js') }}
<script>
	$(function () {
		$('.textarea-summernote').summernote({
		  	height:250,
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
	})
</script>
@endpush