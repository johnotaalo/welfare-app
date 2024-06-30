import Vue from "vue";
import Router from 'vue-router';

//Import Page Components
import Dashboard from "../views/Dashboard.vue";
import TenantIndex from "../views/tenants/Index.vue";

Vue.use(Router);

const routes = [
    {
        path: '/',
        name: 'dashboard',
        component: Dashboard
    },
    {
        path: '/tenants',
        name: 'tenants',
        component: TenantIndex
    }
];

export default new Router({
    mode: 'history',
    routes
});
