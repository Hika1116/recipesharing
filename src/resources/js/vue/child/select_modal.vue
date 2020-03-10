
<template>
    <div id="select-modal">
        <div id="content">
            <h3>{{title}}</h3>
            <div id="input-text-area">
                <input id="input-text" type="text">
            </div>
            <div id="choice-area">
                <table>
                    <tr>お昼</tr>
                    <tr>朝ごはん</tr>
                </table>
            </div>
            <div id="selected-area">
                <table>
                    <tr>にんじん</tr>
                    <tr>玉ねぎ</tr>
                </table>

            </div>
            <p><button type="button" v-on:click="clickClose">close</button></p>
        </div>
    </div>
</template>

<script>
export default {
    props:{
        title:String,
        choiceArray:Array,
    },
    methods:{
        clickClose:function(){
            this.$emit('from-child', 'hikaru');
        }
    }
}
</script>
<style>
    #select-modal {
        /*　要素を重ねた時の順番　*/
        z-index:1;

        /*　画面全体を覆う設定　*/
        position:fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background-color:rgba(0,0,0,0.5);

        /*　画面の中央に要素を表示させる設定　*/
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #content{
        z-index:2;
        width:50%;
        height: 50%;
        padding: 1em;
        background:#fff;
    }
</style>