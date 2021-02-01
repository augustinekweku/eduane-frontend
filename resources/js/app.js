require('./bootstrap');

window.Vue = require('vue');

window.$ = window.jQuery = require('jquery')

import animateCss from 'animate.css';
Vue.use(animateCss);

import store from './store'

import Swal from 'sweetalert2';
window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: 'top',
    showConfirmButton: false,
    timer: 5000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
    })
window.Toast = Toast;

import common from './common'
Vue.mixin(common);

Vue.component('login', require('./components/login.vue').default)
Vue.component('register', require('./components/register.vue').default)
Vue.component('search', require('./components/search.vue').default)
Vue.component('testimonial-slider', require('./components/testimonial-slider.vue').default)
Vue.component('faqs', require('./components/faqs.vue').default)
Vue.component('navbar', require('./components/navbar.vue').default)

const app = new Vue({
    el: '#app',
    store

})
