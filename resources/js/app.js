require('./bootstrap');
window.Vue = require('vue');

import Carousel3d from 'vue-carousel-3d';

Vue.use(Carousel3d);

Vue.component('search', require('./components/search.vue').default)

const app = new Vue({
    el: '#app'

})