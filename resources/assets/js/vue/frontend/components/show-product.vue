<template>
    <div class="primary-box row">
        <div class="pb-left-column col-sm-5">
            <div class="product-image">
                <div class="product-full">
                    <img :src="renderImage(product.image_square)" />
                </div>
            </div>
        </div>
        <div class="pb-right-column col-sm-7">
            <h1 class="product-name">{{ product.name }}</h1>
        </div>
    </div>
</template>
<script>
    export default {
        props: {
            product: {
                type: Object,
                default: function () {
                    return {}
                }
            }
        },
        methods: {
            renderImage: function(src) {
                return window.laroute.route('image', {'path':src});
            }
        }
    }
</script>