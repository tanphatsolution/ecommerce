@extends('layouts.frontend')

@section('page-content')
<div class="columns-container">
    <div class="container" id="columns">
    	<div class="breadcrumb clearfix">
            <a class="home" href="/" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">{{$item->name}}</span>
        </div>

        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">

            </div>

            <div class="center_column col-xs-12 col-sm-9" id="center_column">
            	@if ($item->banner)
            	<div class="category-slider">
                    <ul class="owl-carousel owl-style2" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1">
                        <li>
                            <img src="{{ route('image', $item->banner->image_default) }}" alt="{{$item->name}}">
                        </li>
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection