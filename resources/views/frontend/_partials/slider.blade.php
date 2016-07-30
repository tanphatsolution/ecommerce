<div id="home-slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 slider-left"></div>
            <div class="col-sm-9 header-top-right">
                <div class="homeslider">
                @if (count($sliders))
                    <ul id="contenhomeslider" class="owl-carousel" data-dots="true" data-autoPlay="5000" data-loop="true" data-responsive='{"0":{"items":1}}'>
                        @foreach ($sliders as $slide)
                        <li class="item"><img alt="{{$slide->name}}" src="{{route('image',$slide->image_slide)}}"  /></li>
                        @endforeach
                    </ul>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>