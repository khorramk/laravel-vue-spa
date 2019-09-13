

import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import axios from 'axios';
import Home from './components/Home';

Vue.use(VueRouter);
window.axios = axios;
axios.defaults.headers.common['Authorization'] = 'Bearer' + 'api_token=test';
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


let app = new Vue({
    el: '#app',

    router: new VueRouter(routes),
    
});


