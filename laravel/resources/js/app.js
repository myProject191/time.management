require('./bootstrap');

// require('./stopwatch.js');

require('alpinejs');


import Vue from 'vue'
import Sample from './components/Sample.vue'
import TimeRecordsGantt from './components/TimeRecordsGantt.vue'
import HomeGantt from './components/HomeGantt.vue'
// import Stopwatch from './components/Stopwatch.vue'

// new vueは一つしか書かない。
new Vue({
    el: '#app',
    components: { 
        Sample,
        TimeRecordsGantt,
        HomeGantt,
    }
});