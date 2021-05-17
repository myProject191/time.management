require('./bootstrap');

// require('./stopwatch.js');

require('alpinejs');


import Vue from 'vue'
import Sample from './components/Sample.vue'
import SampleGantt from './components/SampleGantt.vue'
// import Stopwatch from './components/Stopwatch.vue'

new Vue({
    el: '#app',
    components: { 
        Sample,
        SampleGantt,
        // Stopwatch,
    }
});