require('./bootstrap');

// require('./stopwatch.js');

require('alpinejs');


import Vue from 'vue'
import Sample from './components/Sample.vue'
import SampleGantt from './components/SampleGantt.vue'
import SampleGantt2 from './components/SampleGantt2.vue'
// import Stopwatch from './components/Stopwatch.vue'

new Vue({
    el: '#app',
    components: { 
        Sample,
        SampleGantt,
    }
});

new Vue({
    el: '#homeApp',
    components: {
        SampleGantt2,
    }
});