
<template>
<div id='wrapper-recipe'>
    <h2>レシピ一覧 <i class="fas fa-list-alt"></i></h2>
    <button v-on:click="clickButton">click</button>
    <div v-for="recipe in recipedata" :key="recipe.recipe_info.id">
        <recipe-card :title="hikaru"></recipe-card>
    </div>
</div>
</template>

<script>
import RecipeCard from '../child/recipe_card.vue';

export default {
    data(){
        return {
            recipedata : JSON.parse(this.recipeList),
        }
    },
    props:{
        recipeList:String,
    },
    components:{
        RecipeCard:RecipeCard,
    },
    methods: {
        clickButton : function(){
            console.log(this.recipeList);
        }
    },
}
</script>

<style>
    #wrapper-recipe {
      width: 800px;
      margin: 30px auto;
      border: solid 2px #BCB5B5;
      box-shadow: 0 0 8px #BCB5B5;
      border-radius: 12px;
    }
    #wrapper-recipe h2 {
      font-size: 1.5rem;
      color: white;
      margin-left: 20px;
      font-weight: bold;
      background-color: #EF866B;
      margin: 0;
      padding: 15px;
      border-radius: 10px 10px 0 0;
    }
</style>