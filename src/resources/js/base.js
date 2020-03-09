
import Vue from 'vue';

import Header from './vue/child/header.vue';
import Footer from './vue/child/footer.vue';

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