import Dashboard from "./views/Dashboard.vue";

require('../bootstrap')
window.Vue = require('vue').default;
import App from "./layouts/App.vue";
// import router from "./router/index"
import VueRouter from "vue-router";
// Tenant Routes
import Tenant from "./views/tenants/Tenant.vue";
import TenantIndex from "./views/tenants/Index.vue";
import ViewTenant from "./views/tenants/ViewTenant.vue";
import NewTenant from "./views/tenants/NewTenant.vue";

// User Routes
import UsersIndex from "./views/users/Index.vue";


Vue.use(VueRouter);
Vue.use(require('vue-moment'));

const router = new VueRouter({
    linkExactActiveClass: "active",
    routes: [
        {
            path: '/',
            name: 'dashboard',
            component: Dashboard
        },
        {
            path: '/tenants',
            component: Tenant,
            children: [
                {
                    path: '/',
                    name: "tenants.index",
                    component: TenantIndex
                },
                {
                    path: '/tenants/:id',
                    name: "tenants.view",
                    component: ViewTenant
                },
                {
                    path: '/tenants/new',
                    name: "tenants.create",
                    component: NewTenant
                }
            ]

        },
        {
            path: '/users',
            name: 'users',
            component: UsersIndex
        }
    ]
})

Vue.router = router

Vue.filter('toTitleCase', function(str){
    return str.replace(
        /\w\S*/g,
        text => text.charAt(0).toUpperCase() + text.substring(1).toLowerCase()
    );
})

Vue.filter('getFirstLetter', function(str){
    return str[0].charAt(0).toUpperCase()
})

Vue.filter("fillNull", function (data) {
    return !data ? "No data found" : data
})

const app = new Vue({
    el: '#app',
    components: {App},
    router
});