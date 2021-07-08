require('./bootstrap');


window.Vue = require('vue').default;

import Axios from 'axios';

Vue.component('products', require('./components/Products.vue').default);
// Vue.component('category-field-value', require('./components/CategoryFieldValue.vue').default);

const app = new Vue({
    el: '#app',
});