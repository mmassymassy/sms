import { createRouter, createWebHistory } from "vue-router";
import Main from './components/skel/Main.vue';
import Dash from './components/dashboard/Dashboard.vue';
import User from './components/user/User.vue';
import UserDetails from './components/user/UserDetails.vue';
import UserEdit from './components/user/UserEdit.vue';
import Login from './components/login/Login.vue';
import Register from './components/login/Register.vue';

const routes = [
        {
            path : '/login',
            name : 'access.login',
            component : Login

        },
        {
            path : '/register',
            name : 'access.register',
            component : Register

        },
    {
        path : '/home',
        name : 'home',
        component : Main

    },
    {
        path : '/dashboard',
        name : 'home.dashboard',
        component : Dash
    },
    {
        path : '/user',
        component : User,
        children : [
            {
                path: '',
                name : 'user.details',
                component : UserDetails
            },
            {
                path: 'edit',
                name : 'user.edit',
                component : UserEdit
            },
        ]
    }
];
export default createRouter({
    history : createWebHistory(),
    routes,
    linkActiveClass: "active",
    linkExactActiveClass: "exact-active",

});
