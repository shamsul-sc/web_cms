import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

import App from './App.vue';
import Create from './components/cms/home/home_sliders/Create.vue';
import Index from './components/cms/home/home_sliders/Index.vue';
import Edit from './components/cms/home/home_sliders/Edit.vue';

// Define your routes
const routes = [
    {
        name: 'Create',
        path: '/create',
        component: Create
    },
    {
        name: 'Index',
        path: '/',
        component: Index
    },
    {
        name: 'Edit',
        path: '/edit/:id',
        component: Edit
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
