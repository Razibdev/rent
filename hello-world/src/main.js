import { createApp } from 'vue'
import Axios from "axios";
// import VueAxios from "vue-axios";
import { VueWindowSizePlugin } from "vue-window-size/option-api";

import store from '@/store/index.js';
import router from '@/router/index.js';
import App from './App.vue';

import loader from "vue-ui-preloader";

import ToastPlugin from "vue-toast-notification";
import "vue-toast-notification/dist/theme-sugar.css";


Axios.defaults.baseURL = process.env.VUE_APP_API_URL;
window.Axios = Axios;
const app = createApp(App);
// app.use(VueAxios, axios);
app.use(router);
app.use(store);
app.use(loader);
app.use(ToastPlugin, {
  position: "top-right",
  dismissible: false,
});
app.use(VueWindowSizePlugin);
app.mount('#app');
