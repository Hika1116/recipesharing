require('./bootstrap');

import Vue from 'vue'

import TopHeader from './vue/top_header.vue';
import TopSentence from './vue/top_sentence_1.vue';

new Vue({
    el: '#warapper',
    components: {
        TopHeader: TopHeader,
        TopSentence:TopSentence,
    },
})