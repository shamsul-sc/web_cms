import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

import App from './App.vue';

// Define your routes
const routes = [
    {
        name: 'home-sliders.create',
        path: '/home-sliders/create',
        component: () => import('./components/cms/home/home_sliders/Create.vue')
    },
    {
        name: 'home-sliders.index',
        path: '/home-sliders',
        component: () => import('./components/cms/home/home_sliders/Index.vue')
    },
    {
        name: 'home-sliders.edit',
        path: '/home-sliders/edit/:id',
        component: () => import('./components/cms/home/home_sliders/Edit.vue')
    }
];

// Create the router instance
const router = createRouter({
    history: createWebHistory('/dashboard'),
    routes,
});

// Create and mount the root instance
createApp(App)
    .use(router)
    .mount('#app');
