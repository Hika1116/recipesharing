
<template>
    <div id="recipe-card">
        <div id="recipe-card-img">
            <img :src="cardImg" alt="card-img">
        </div>
        
        <div id='recipe-card-detail'>
            <h3>{{title}}</h3>
            <hr>
            <div id="category-tag-area">
                <p v-for="category in categoryList" :key="category">
                    <a href="#">{{category}}</a>
                </p>
            </div>
            <p id="recipe-context">
                <slot name="recipe-context"></slot>
            </p>
            <div id="mategial-area">
                <p>材料: {{materials}}</p>
            </div>
            <div id="recipe-card-function">
                <a href="#">Hikaru</a>
                <a href="#">お気に入り</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            title:'レシピ1',
            categoryList:[
                '#夕飯',
                '#あっさり',
                '#肉料理',
            ],
            materials:'人参、豚肉、ほうれん草、、、'
        }
    }
}
</script>

<style>
    #recipe-card {
        display: flex;
        width: 600px;
        padding: 20px 50px;
        border: solid 2px #BCB5B5;
        border-radius: 10px;
        margin: 20px auto;
         box-shadow: 0 0 3px #BCB5B5;
    }
    #recipe-card-img {
        width: 300px;
    }
    #recipe-card-detail {
        width: 100%;
        display: block;
    }
    #recipe-card-detail h3 {
        color: #BCB5B5;
        margin: 0;
        font-size: 1.5rem;
    }
    #recipe-card-detail hr {
        margin: 0;
    }
    #category-tag-area {
        display: flex;
        padding:0;
        margin:5px 0 0 0;
    }
    #category-tag-area p  {
        display: block;
        margin: 0 10px 0 0;
        padding:3px 10px;
        border-radius: 10px;
        border: solid 1px #F7B46B;
        background-color: #F7B46B;
    }
    #category-tag-area p a {
        text-decoration: none;
        color: white;
        font-size: .8rem;
    }

    #recipe-card-function{
        display: flex;
        justify-content: flex-end;
    }
    #recipe-card-function a {
        padding: 3px 10px;
        border-radius: 10px;
        border: solid 1px #EF866B;
        background-color: #EF866B;
        text-decoration: none;
        color: white;
        margin: 0 10px 0 0;
    }
    #recipe-context {
        color: #BCB5B5;
    }
    #mategial-area p {
        color: #BCB5B5;
    }
</style>