
<template>
    <div id="select-modal">
        <div id="content">
            <h3>{{title}}</h3>
            <button id="cancel-button" type="button" v-on:click="clickClose">×</button>
            <div id="select-area">
                <div class="choice-area">
                    <div class="input-text">
                        <input type="text" placeholder="カテゴリー名を入力">
                    </div>
                    <div class="table-area">
                        <table>
                            <thead>
                                <tr><th>カテゴリー</th></tr>
                            </thead>
                            <tbody>
                                <tr v-for="(value, key) in choiceList" :key="key">
                                    <td v-on:click="pushData(key)">{{value}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="selected-area">
                    <div class="dummy-class"></div>
                    <div class="table-area">
                        <table>
                            <thead>
                                <tr><th>選択済</th></tr>
                            </thead>
                            <tbody>
                                <tr v-for="(value, key) in selectedList" :key="key">
                                    <td v-on:click="pullData(key)">{{value}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
    .choice-button-area {
        display: flex;
        justify-content: flex-end;
    }
    .choice-button-area button {
        margin-right: 20px;
    }
    .dummy-class {
        height: 45px;
    }
    .choice-area, .selected-area {
        width: 40%;
        margin: 10px 30px;
    }
    .table-area {
        width: 100%;
        height: 300px;
        border: solid 3px #eee;
    }
    .table-area table {
        border-collapse: collapse;
        border-spacing: 0;
        margin: 0;
        width: 100%;
    }
    .table-area table tbody {
        overflow-x: hidden;
        overflow-y: scroll;
        height: 250px;
    }
    .table-area table thead, tbody {
        display: block;
    }
    .table-area table tr{
        border-bottom: solid 1px #eee;
        line-height: 50px;
        cursor: pointer;
        margin:0;
        display: block;
        width: 100%;
    }
    .table-area table th, td {
        text-align: center;
        display: block;
        max-height: 80px;
        width: 100%;
    }
    .table-area table th {
        background-color: #EF866B;
        color: white;
    }
    
    .table-area table tr:hover{
        background-color: #d4f0fd;
    }



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
        position: relative;
    }
    #content h3 {
        text-align: center;
    }
    #cancel-button {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 30px;
        height: 30px;
        font-size: 1rem;

        display: inline-block;
        text-decoration: none;
        background: #BCB5B5;
        color: #FFF;
        border-radius: 50%;
        text-align: center;
        overflow: hidden;
        transition: .4s;
    }
    #cancel-button:hover {
        background: rgb(245, 242, 242);
    }
    .input-text {
        width: 100%;
        height: 35px;
        margin: 5px 3px;
    }
    .input-text input[type=text] {
        box-sizing: border-box;
        line-height: 35px;
        font-size: 15pt;
        width: 100%;
        height: 100%;
        margin: 3px 0;
        transition: 0.3s;
        border: 3px solid #F7B46B;
        border-radius: 4px;
        outline: none;
    }
    .input-text input[type=text]:focus {
        border-color: #da3c41;
    }
    #select-area{
        display: flex;
        justify-content: center;
        margin: 0 auto;
    }
    
</style>

<script>
export default {
    data(){
        return {
            choiceList:{},
            selectedList:{},
        }
    },
    created(){
        this.choiceList = JSON.parse(this.dataArray);
    },
    props:{
        title:String,
        dataArray:String,
    },
    methods:{
        clickClose:function(){
            this.$emit('from-child', '親へ渡す引数');
        },
        pushData:function(key){
            this.$set(this.selectedList, key, this.choiceList[key]);
            delete this.choiceList[key];
        },
        pullData:function(key){
            this.$set(this.choiceList, key, this.selectedList[key]);
            delete this.selectedList[key];
        }
    }
}
</script>
