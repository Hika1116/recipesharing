
import Vue from 'vue';

import Header from './vue/header.vue';
import Footer from './vue/footer.vue';

new Vue({
    el: '#header',
    components: {
        HeaderComponent: Header
    }
})


new Vue ({
    el: '#footer',
    components:{
        FooterComponent: Footer
    }
})