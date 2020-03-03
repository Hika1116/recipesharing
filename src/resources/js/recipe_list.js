require('./bootstrap');

import Vue from 'vue'

import RecipeCard from './vue/recipe-card';

new Vue({
    el: '#wrapper-recipe',
    components: {
        RecipeCard: RecipeCard,
    },
})