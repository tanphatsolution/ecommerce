@extends('layouts.frontend')

@section('page-content')

@include('frontend._partials.slider')

<div class="content-page">
    <div class="container">
        <?php $floor = 1;?>
        @foreach ($productCategories as $productCategory)
        <div class="category-featured furniture">
            <nav class="navbar nav-menu show-brand">
                <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-brand"><a href="{{route('category.slug',$productCategory->slug)}}">{{$productCategory->name}}</a></div>
                    <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse">           
                        @if (count($productCategory->children))
                        <ul class="nav navbar-nav">
                            @foreach ($productCategory->children as $productCategoryChildren)
                            <li ><a  href="{{route('category.slug', $productCategoryChildren->slug)}}">{{$productCategoryChildren->name}}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
                <div id="elevator-{{ $floor++ }}" class="floor-elevator">
                    <a href="#elevator-{{ $floor-2 }}" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-{{ $floor }}" class="btn-elevator down fa fa-angle-down"></a>
                </div>
            </nav>
            <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">Opus</a></li>
                            <li><a href="#">Saima</a></li>
                            <li><a href="#">Microsoft</a></li>
                            <li><a href="#">China</a></li>
                            <li><a href="#">IBM</a></li>
                            <li><a href="#">Dell</a></li>
                            <li><a href="#">HP</a></li>
                            <li><a href="#">Tone - Japan</a></li>
                            <li><a href="#">Git - Korea</a></li>
                            <li><a href="#">Solary</a></li>
                            <li><a href="#">Torin</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active">
                                   <div class="box-left">
                                       <div class="banner-img">
                                            <a href="{{ route('category.slug', $productCategory->slug)}}"><img src="{{ ($productCategory->image )? route('image', $productCategory->image_default) :  asset('assets/img/backend/no_image.jpg') }}" alt="Banner Product"></a>
                                        </div>
                                   </div>
                                   <div class="box-right">
                                        @if (count($productCategory->homeProducts))
                                        <ul class="product-list row">
                                            @foreach ($productCategory->homeProducts as $homeProduct)
                                            <li class="col-sm-6">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="{{ route('product.slug', $homeProduct->slug) }}" title="{{ $homeProduct->name }}">{{ str_limit($homeProduct->name, 20) }}</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">
                                                            {{ number_format( ($homeProduct->sale) ? $homeProduct->price_sale : $homeProduct->price) }} ₫
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="{{ route('product.slug',$homeProduct->slug) }}"><img class="img-responsive" alt="product" src="{{ ($homeProduct->image )? route('image',$homeProduct->image_small) :  asset('assets/img/backend/no_image.jpg') }}" /></a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                        <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                       </ul>
                                       @endif
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div id="content-wrap">
    <div class="container">
        <div class="row banner-bottom">
            <div class="col-sm-6 item-left">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="assets/img/frontend/banner-botom1.jpg" /></a>
                </div>
            </div>
            <div class="col-sm-6 item-right">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="assets/img/frontend/banner-bottom2.jpg" /></a>
                </div>
            </div>
        </div>

        <div class="blog-list">
            <h2 class="page-heading">
                <span class="page-heading-title">From the blog</span>
            </h2>
            <div class="blog-list-wapper">
                <ul class="owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                    @foreach ($posts as $post)
                    <li>
                        <div class="post-thumb image-hover2">
                            <a href="#"><img src="{{ ($post->image) ? route('image',$post->image_small) :  asset('assets/img/backend/no_image.jpg') }}" alt="{{ $post->name }}"></a>
                        </div>
                        <div class="post-desc">
                            <h5 class="post-title">
                                <a href="#">{{str_limit($post->name,30)}}</a>
                            </h5>

                            <div class="readmore">
                                <a href="#">Readmore</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection