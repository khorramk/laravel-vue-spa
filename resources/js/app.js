import './bootstrap';

import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import axios from 'axios';
import Clients from './components/passport/Clients';
import Authorized from './components/passport/AuthorizedClients';
window.axios = axios;
Vue.use(VueRouter);

Vue.component(
    'passport-clients',
    Clients
)
Vue.component(
    'passport-authorised-clients',
    Authorized
)

let app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});



