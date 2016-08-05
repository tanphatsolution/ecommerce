@extends('layouts.frontend')

@section('page-content')
<div class="columns-container" id="category">
    <div class="container" id="columns">
        <div class="breadcrumb clearfix">
            <a class="home" href="/" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">{{ $item->name }}</span>
        </div>

        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                @include('frontend._partials.block-category', ['categories' => $categories])
                @include('frontend._partials.block-filter')
            </div>
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                @if ($banner = $item->banner)
                <div class="category-slider">
                    <ul class="owl-carousel owl-style2" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1">
                        <li>
                            <img src="{{ route('image', $banner->image_default) }}" alt="{{ $item->name }}">
                        </li>
                    </ul>
                </div>
                @endif
                <div class="subcategories">
                    <ul>
                        <li class="current-categorie">
                            <a href="#">{{ $item->name }}</a>
                        </li>
                    </ul>
                </div>
                <div id="view-product-list" class="view-product-list">
                    <h2 class="page-heading">
                        <span class="page-heading-title">Products</span>
                    </h2>
                    <ul class="display-product-option">
                        <li class="view-as-grid selected">
                            <span>grid</span>
                        </li>
                        <li class="view-as-list">
                            <span>list</span>
                        </li>
                    </ul>
                    @if (count($products))
                    <ul class="row product-list grid">
                        @foreach ($products as $product)
                        <li class="col-sx-12 col-sm-4">
                            @include('frontend._partials.product-container', ['product' => $product])
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="sortPagiBar">
                    <div class="bottom-pagination">
                        <nav>
                            {{$products->render()}}
                        </nav>
                    </div>
                    <div class="sort-product">
                        <select>
                            <option value="">Product New</option>
                            <option value="">Price</option>
                        </select>
                        <div class="sort-product-icon">
                            <i class="fa fa-sort-alpha-asc"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('prescripts')
<script>
    var properties = {!! $properties or '[]' !!};
</script>
{{ HTML::script(elixir('assets/vue/frontend/category.js')) }}
@endpush