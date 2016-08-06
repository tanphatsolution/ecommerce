import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import Routes from './routes'
import FilterProduct from './components/filter-product.vue'
import ShowProduct from './components/show-product.vue'
import ProductService from './services/product'
require('es6-promise').polyfill()
Vue.use(VueRouter)
Vue.use(VueResource)

const router = new VueRouter({
    history: true,
    saveScrollPosition: false,
    transitionOnLoad: true
})

Routes.route(router)

new Vue({
    el : 'body',
    data:{
        properties: window.properties || [],
        product: {
            type: Object,
            default: function () {
                return {};
            }
        }
    },
    created: function () {
        ProductService.setRouter(window.laroute);
        ProductService.setHttp(this.$http);
    },
    methods: {
        showProduct: function(id) {
            var self = this;
            ProductService.productShow(id).then((product) => self.product = product);
            $('#product-quickview').modal('show');
        }
    },
    components : { FilterProduct, ShowProduct }
});

window.$router = router
