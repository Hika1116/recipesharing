require('./bootstrap');

import Vue from 'vue'

import TopHeader from './vue/top_header.vue';

new Vue({
    el: '#top-header',
    components: {
        TopHeader: TopHeader
    }
})