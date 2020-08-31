import Vue from 'vue';
import VueRouter from 'vue-router'

Vue.use(VueRouter);

let routes = [
    {
        path: '/', name: 'landing', component: require("./components/App.vue").default,
        meta: { title: 'Welcome' }
    }, 
]


const router = new VueRouter({
    mode: "history",
    routes,
    linkActiveClass: "active",
    linkExactActiveClass: "exact-active",

});

export default router;