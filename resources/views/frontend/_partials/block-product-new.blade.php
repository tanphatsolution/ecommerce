<div class="block left-module">
    <p class="title_block">Sản phẩm mới</p>
    <div class="block_content">
        <div class="owl-carousel owl-best-sell" data-nav ="false" data-margin ="0" data-items="1">
            @foreach ($newProducts->chunk(5) as $chunks)
            <ul class="products-block best-sell">
                @foreach($chunks as $chunk)
                    <li>
                        <div class="products-block-left">
                            <a href="{{ route('product.slug', $chunk->slug) }}">
                                <img src="{{ ($chunk->image )? route('image',$chunk->image_thumbnail) :  asset('assets/img/backend/no_image.jpg') }}" alt="{{ $chunk->name }}">
                            </a>
                        </div>
                        <div class="products-block-right">
                            <a title="{{ $chunk->name }}" class="product-name" href="{{ route('product.slug',$chunk->slug) }}">{{ str_limit($chunk->name, 25) }}</a>
                            <p class="product-price">{{ number_format( $chunk->sale ? $chunk->price_sale : $chunk->price) }} ₫</p>
                            <p class="product-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </p>
                        </div>
                    </li>
                @endforeach
            </ul>
            @endforeach
        </div>
    </div>
</div>