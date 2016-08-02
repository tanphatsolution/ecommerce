<template>
<ul class="row product-list grid">
    <li v-for="product in products" class="col-sx-12 col-sm-4">
        <div class="product-container">
            <div class="left-block">
                <a href="#">
                    <img class="img-responsive" title="{{product.name}}" alt="{{product.name}}" :src="renderImage(product.image_medium)">
                </a>
                <div class="quick-view">
                    <a title="Add to my wishlist" class="heart" href="#"></a>
                    <a title="Quick view" class="search" href="#"></a>
                </div>
            </div>
            <div class="right-block">
                <h5 class="product-name"><a href="#" title="{{product.name}}">{{ product.name | truncate '30'}}</a></h5>
                <div class="product-star">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <div class="content_price">
                    <span class="price product-price">{{ product.price | currency '' 0 }}</span>
                    <span class="price old-price">{{ product.price_sale | currency '' 0 }}</span>
                </div>
                <div class="info-orther">
                    <p>Item Code: #{{ product.code }}</p>
                    <p class="availability">Provider: <span>{{ product.provider.name }}</span></p>
                    <div class="product-desc">
                        {{ product.description | truncate '120' }}
                    </div>
                </div>
            </div>
        </div>
    </li>
</ul>
</template>
<script>
    export default {
        props: {
            products: {
                type: Object,
                default: function () {
                    return {};
                }
            }
        },
        data: function () {
            return {
                //filtersSelected: [],
            }
        },
        methods: {
            renderImage: function(src) {
                return (src) ? window.laroute.route('image',{'path':src}) : "asset('assets/img/backend/no_image.jpg')";
            }
        },
        ready: function () {
            
        }
    }
</script>