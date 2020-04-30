import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'hash',
    routes: [
        {
            path: '/',
            name: 'Index',
            component: require('./pages/Index').default,
        },

        {
            path: '/blog',
            name: 'Blog',
            component: require('./pages/Blog').default,
        },

        {
            path: '/blog/:id',
            props: true,
            name: 'Article',
            component: require('./pages/Article').default,
        },
    ],
});

export default router;