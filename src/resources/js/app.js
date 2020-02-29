require('./bootstrap');

import Vue from 'vue'

import Header from './vue/header.vue';

new Vue({
    el: '#app',
    template: Header
})