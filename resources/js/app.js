import { App, plugin } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'
InertiaProgress.init()
import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)

Vue.use(plugin)
const el = document.getElementById('app')
new Vue({
    render: h => h(App, {
        props: {
            initialPage: JSON.parse(el.dataset.page),
            resolveComponent: name => import(`./Pages/${name}`).then(module => module.default),
        },
    }),
}).$mount(el)
