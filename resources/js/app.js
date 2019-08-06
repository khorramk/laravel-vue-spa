import './bootstrap';

import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import axios from 'axios';
import Home from './components/Home';
window.axios = axios;
Vue.use(VueRouter);

let app = new Vue({
    el: '#app',

    router: new VueRouter(routes),
    components: {
        Home
    }
});



