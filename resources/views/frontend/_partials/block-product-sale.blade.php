<div class="block left-module">
    <p class="title_block">Hàng giảm giá</p>
    <div class="block_content product-onsale">
        <ul class="product-list owl-carousel" data-loop="true" data-nav="false" data-margin ="0" data-autoplay-timeout="10000" data-autoplay-hover-pause="true" data-items="1" data-autoplay="true">
            @foreach ($saleProducts as $saleProduct)
            <li>
                <div class="product-container">
                    <div class="left-block">
                        <a href="{{ route('product.slug', $saleProduct->slug) }}">
                            <img class="img-responsive" alt="{{ $saleProduct->name }}" src="{{ ($saleProduct->image )? route('image',$saleProduct->image_thumbnail) :  asset('assets/img/backend/no_image.jpg') }}" />
                        </a>
                        <div class="price-percent-reduction2">{{ floor($saleProduct->price_sale/$saleProduct->price * 100) - 100 }} %</div>
                    </div>
                    <div class="right-block">
                        <h5 class="product-name"><a href="{{ route('product.slug',$saleProduct->slug) }}">{{ str_limit($saleProduct->name, 25) }}</a></h5>
                        <p class="product-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </p>
                        <div class="content_price">
                            <span class="price product-price">{{ number_format($saleProduct->price_sale) }} ₫</span>
                            <span class="price old-price">{{ number_format($saleProduct->price) }} ₫</span>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>