<template>
    <div id="recipe_search_form">
        <h2>検索条件</h2>
        <form method="GET" action="/search" onsubmit="return false;">
            <div class="select-title-area">
                <p>タイトル</p>
                <input type="text" value="title" name="title">
            </div>

            <div class="select-area">
                <div class="select-item-header">
                    <p>カテゴリー</p>
                    <div class="button-area">
                        <button type="button" v-on:click="onClickIsCategoryModalShow">選択</button>
                    </div>
                </div>
                <div class="selected-item">
                    <p>select Item</p>
                </div>
            </div>
            
            <div class="select-area">
                <div class="select-item-header">
                    <p>材料</p>
                    <div class="button-area">
                        <button type="button" v-on:click="onClickIsMaterialModalShow">選択</button>
                    </div>
                </div>
                <div class="selected-item">
                    <p>select Item</p>
                </div>
            </div>
            
            <input type="button" value="検索" onclick=”submit();”>
        </form>

        <!-- 選択用モーダル -->
        <!-- カテゴリー -->
        <select-modal
                :title="modalCategoryTitle" 
                :data-array="categoryArray" 
                v-show="isCategoryModalShow" 
                v-on:from-child="closeModal"
                v-on:from-child-in-select-item="getCategorySelectItem"></select-modal>
        <!-- 材料 -->
        <select-modal
                :title="modalMaterialTitle" 
                :data-array="materialArray" 
                v-show="isMateriakModalShow" 
                v-on:from-child="closeModal"
                v-on:from-child-in-select-item="getMaterialSelectItem"></select-modal>
    </div>
</template>

<script>
import SelectModal from './select_modal.vue';

export default {
    components:{
        SelectModal:SelectModal,
    },
    props:{
        categoryArray:String,
        materialArray:String,
    },
    data(){
        return {
            isCategoryModalShow:false,
            isMateriakModalShow:false,
            modalCategoryTitle:"カテゴリー",
            modalMaterialTitle:'材料',

        }
    },
    methods:{
        onClickIsCategoryModalShow:function(){
            this.isCategoryModalShow = true;
        },
        onClickIsMaterialModalShow:function(){
            this.isMateriakModalShow = true;
        },
        closeModal: function(name){
            //ここで子コンポーネントのイベント発火もわかる
            this.isCategoryModalShow = false;
            this.isMateriakModalShow = false;
        },
        getCategorySelectItem:function(resultArray){
            this.isCategoryModalShow = false;
            console.log(resultArray);
        },
        getMaterialSelectItem:function(resultArray){
            this.isMateriakModalShow = false;
            console.log(resultArray);
        }
    }
}
</script>

<style>
#recipe_search_form {
    width: 250px;
    height: 50%;
    box-shadow: 0 0 3px #BCB5B5;
    margin: 0 20px;
    border-radius: 13px;
    border: solid 2px #BCB5B5;
}

#recipe_search_form h2 {
    font-size: 1.5rem;
      color: white;
      margin-left: 20px;
      font-weight: bold;
      background-color: #F7B46B;
      margin: 0;
      padding: 15px;
      border-radius: 10px 10px 0 0;
}
#recipe_search_form form {
    height: 85%;
}

form p {
    margin: 3px 3px;
    color: #BCB5B5;
    width: 50%;
}
.select-title-area {
    height: 20%;
    max-height: 60px;
}
.select-title-area input[type='text']{
    margin: 3px 3px;
    width: 80%;
    max-width: 300px;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #BCB5B5;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
}
.select-area {
    margin: 15px 0;
    height: 35%;
}
.select-item-header {
    display: flex;
    position: relative;
}
.select-item-header .button-area button {
    display: block;
	position: relative;
    border-radius: 10px;
	width: 50px;
	text-align: center;
	text-decoration: none;
	color:white;
	background: #BCB5B5;
    margin-right: 20px;
}
.select-item-header .button-area button:hover {
    opacity:0.8;
	cursor: pointer;
	text-decoration: none;
}
.select-item-header .button-area button:focus{
    outline:0;
}
.button-area {
    display: flex;
    justify-content: flex-end;
    width: 50%;
}
.selected-item {
    border: 1px solid #BCB5B5;
    margin: 3px 3px;
    width: 90%;
    max-width: 500px;
    height: 70%;
    max-height: 300px;
}
</style>