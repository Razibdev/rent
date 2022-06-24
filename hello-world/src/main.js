import { createApp } from 'vue'
import axios from "axios";
import VueAxios from "vue-axios";
import { VueWindowSizePlugin } from "vue-window-size/option-api";


import store from '@/store/index.js'
import router from '@/router/index.js'
import App from './App.vue'

const app = createApp(App)
app.use(VueAxios, axios);
app.use(router);
app.use(store);
app.use(VueWindowSizePlugin);
app.mount('#app');
