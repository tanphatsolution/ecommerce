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
Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content')

const router = new VueRouter({
    history: true,
    saveScrollPosition: false,
    transitionOnLoad: true
})

var token = $('meta[name="csrf-token"]').attr('content')

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
        },
        productSelected: {},
        productQuantity: Number,
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
        },
        postCart: function (id) {
            var selected = [];
            $.map(this.productSelected, function (v) {
                selected.push(v);
            });
            var self = this;
            var data = {_token: token, selected:selected, 'qty':this.productQuantity};
            ProductService.productPostCart(id, data).then();
            //console.log({selected:selected, 'qty':this.productQuantity});
        }
    },
    components : { FilterProduct, ShowProduct }
});

window.$router = router
