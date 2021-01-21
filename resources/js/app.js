import { App, plugin } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'
InertiaProgress.init()
import Vue from 'vue'
import store from './store/'
// import * as type from './store/mutationTypes/types';

Vue.use(plugin)
const el = document.getElementById('app')
new Vue({
    store,
    // type,
    render: h => h(App, {
        props: {
            initialPage: JSON.parse(el.dataset.page),
            resolveComponent: name => import(`./Pages/${name}`).then(module => module.default),
        },
    }),
}).$mount(el)
