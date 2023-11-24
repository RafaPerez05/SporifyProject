// axios.js
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import axios from 'axios';

InertiaProgress.init();

createInertiaApp({
    resolve: name => import(`./Pages/${name}`),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            .component('InertiaLink', require('@inertiajs/inertia-vue3').InertiaLink)
            .component('InertiaHead', require('@inertiajs/inertia-vue3').InertiaHead)
            .mount(el);
    },
});

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.withCredentials = true;

export default axios;
