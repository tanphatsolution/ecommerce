import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import Routes from './routes'
import FilterProduct from './components/filter-product.vue'
import ContainerProduct from './components/container-product.vue'
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
    el : '#category',
    data:{
        properties: window.properties || [],

    },
    components : { FilterProduct, ContainerProduct }
});

window.$router = router
