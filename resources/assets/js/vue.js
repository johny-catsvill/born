import { createApp } from 'vue'
import store from './store/store'

import EstimateCmp from './components/Estimate/SimpleCmp/Index'
import EstimateFullCmp from './components/Estimate/FullCmp/Index'

const app = createApp()

import vSelect from 'vue-select'
app.component('v-select', vSelect)

app.component('estimate-cmp', EstimateCmp)
app.component('estimate-full-cmp', EstimateFullCmp)

//app.component('estimate-cmp', EstimateCmp)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import Maska from 'maska'
app.use(Maska)
app.use(store).mount('#app')






