require('./bootstrap');

window.Vue = require('vue');

Vue.component('home', require('./components/HomeComponent.vue').default);

Vue.component('libre', require('./components/LibreComponent.vue').default);

Vue.component('contratado', require('./components/ContratadoComponent.vue').default);

Vue.component('InfiniteLoading', require('vue-infinite-loading'));


const app = new Vue({
    el: '#app',
});
