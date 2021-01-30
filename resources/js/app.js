require('./bootstrap');

window.Vue = require('vue');

window.$ = window.jQuery = require('jquery')
    


Vue.component('search', require('./components/search.vue').default)
Vue.component('testimonial-slider', require('./components/testimonial-slider.vue').default)
Vue.component('faqs', require('./components/faqs.vue').default)

const app = new Vue({
    el: '#app'

})
