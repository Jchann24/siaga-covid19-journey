require('./bootstrap');
import router from './router.js';
import App from './components/App.vue';
import AOS from 'aos';
import 'aos/dist/aos.css';
import Swal from 'sweetalert2'



window.Vue = require('vue');
window.Swal = Swal;


const app = new Vue({
    created() {
        AOS.init();
    },
    el: '#app',
    router,
    components: {
        App
    },
});
