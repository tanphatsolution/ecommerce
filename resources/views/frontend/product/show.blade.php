@extends('layouts.frontend')

@section('page-content')
<div class="columns-container">
    <div class="container" id="columns">
        <div class="breadcrumb clearfix">
            <a class="home" href="/" title="Về trang chủ">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">{{ $item->name }}</span>
        </div>
        <div class="row">
            <div class="center_column col-sm-9" id="center_column">
                <div id="product">
                    <div class="primary-box row">
                        <div class="pb-left-column col-sm-6">
                            <div class="product-image">
                                <div class="product-full">
                                    <img width="100%" id="product-zoom" src="{{ route('image', $item->image_square) }}" data-zoom-image="{{ route('image', $item->image_default) }}">
                                </div>
                                <div class="product-img-thumb" id="gallery_01">
                                    @if ( $images = $item->images)
                                    <ul class="owl-carousel owl-theme owl-loaded" data-items="3" data-nav="true" data-dots="false" data-margin="20" data-loop="false">
                                        @foreach ($images as $image)
                                        <li>
                                            <a href="#" data-image="{{ route('image', $image->image_square) }}" data-zoom-image="{{ route('image', $image->image_default) }}">
                                                <img src="{{ route('image', $image->image_thumbnail) }}" /> 
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="pb-right-column col-sm-6">
                            <h1 class="product-name">{{ $item->name }}</h1>
                            <div class="product-price-group">
                                <span class="price">{{ number_format( $item->sale ? $item->price_sale : $item->price) }} ₫</span>
                                @if ($item->sale)
                                <span class="old-price">{{ number_format($item->price) }} ₫</span>
                                <span class="discount">{{ floor($item->price_sale/$item->price * 100) - 100 }} %</span>
                                @endif
                            </div>
                            <div class="info-orther">
                                <p>Sku: #{{ $item->code }}</p>
                                @if ($item->provider)
                                <span>Provider</span>: <a href="#">{{ $item->provider->name }}</a>
                                @endif
                            </div>
                            @if ($properties)
                            <div class="form-option">
                                <p class="form-option-title">Thuộc tính</p>
                                @foreach ($properties as $key => $property)
                                <div class="attributes">
                                    <div class="attribute-label">{{ ucfirst($key) }}:</div>
                                    <div class="attribute-list">
                                        {{ Form::select('property_id', $property->lists('name', 'id'), null) }}
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                            <div class="form-action">
                                <div class="button-group">
                                    <a class="btn-add-cart" href="#">Thêm vào giỏ hàng</a>
                                </div>
                                <div class="button-group">
                                    <div class="fb-like" data-href="{{ Request::url() }}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab">
                        <ul class="nav-tab">
                            <li class="active"><a href="#product-detail" data-toggle="tab">Chi tiết</a></li>
                            <li><a href="#product-comment" data-toggle="tab">Bình luận</a></li>
                        </ul>
                        <div class="tab-container">
                            <div id="product-detail" class="tab-panel active">
                                {!! $item->description !!}
                            </div>
                            <div id="product-comment" class="tab-panel">
                                <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5" data-width="100%"></div>
                            </div>
                        </div>
                    </div>
                    @if ($otherProducts)
                    <div class="page-product-box">
                        <h3 class="heading">Sản phẩm khác</h3>
                        <ul class="product-list owl-carousel owl-theme" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                            @foreach ($otherProducts as $otherProduct)
                            <li>
                                @include('frontend._partials.product-container', ['product' => $otherProduct])
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
            <div class="column col-sm-3" id="left_column">
                @include('frontend._partials.block-product-new', ['newProducts' => $_newProducts])
                @include('frontend._partials.block-product-sale', ['saleProducts' => $_saleProducts])
            </div>
        </div>
    </div>
</div>
@endsection

@push('prescripts')
<script>

</script>
@endpush