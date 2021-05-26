require('./bootstrap');

// require('./stopwatch.js');

require('alpinejs');


import Vue from 'vue'
import Sample from './components/Sample.vue'
import SampleGantt from './components/SampleGantt.vue'
import SampleGantt2 from './components/SampleGantt2.vue'
// import Stopwatch from './components/Stopwatch.vue'

// new vueは一つしか書かない。
new Vue({
    el: '#app',
    components: { 
        Sample,
        SampleGantt,
        SampleGantt2,
    }
});

// new Vue({
//     el: '#homeApp',
//     components: {
//     }
// });