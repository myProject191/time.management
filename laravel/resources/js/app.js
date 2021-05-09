require('./bootstrap');

require('alpinejs');


import Vue from 'vue'
import Sample from './components/Sample.vue'
new Vue({
    el: '#app',
    components: { Sample }
});