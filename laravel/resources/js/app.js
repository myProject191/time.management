require('./bootstrap');

require('alpinejs');


import Vue from 'vue'
import Sample from './components/Sample.vue'
import SampleGantt from './components/SampleGantt.vue'
new Vue({
    el: '#app',
    components: { 
        Sample,
        SampleGantt,
    }
});