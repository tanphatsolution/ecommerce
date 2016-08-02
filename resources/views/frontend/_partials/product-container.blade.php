<div class="product-container">
    <div class="left-block">
        <a href="{{ route('product.slug', $product->slug) }}">
            <img class="img-responsive" title="{{ $product->name }}" alt="{{ $product->name }}" src="{{ ($product->image )? route('image',$product->image_square) :  asset('assets/img/backend/no_image.jpg')}}" />
        </a>
        <div class="quick-view">
                <a title="Add to my wishlist" class="heart" href="#"></a>
                <a title="Quick view" class="search" href="#"></a>
        </div>
    </div>
    <div class="right-block">
        <h5 class="product-name"><a href="{{ route('product.slug', $product->slug) }}" title="{{ $product->name }}">{{ str_limit($product->name, 30) }}</a></h5>
        <div class="product-star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
        </div>
        <div class="content_price">
            <span class="price product-price">{{ number_format($product->price) }}</span>
            <span class="price old-price">{{ number_format($product->price_sale) }}</span>
        </div>
        <div class="info-orther">
            <p>Item Code: #{{ $product->code }}</p>
            <p class="availability">Provider: <span>{{ $product->provider->name }}</span></p>
            <div class="product-desc">
                {{ str_limit(strip_tags($product->description),120) }}
            </div>
        </div>
    </div>
</div>