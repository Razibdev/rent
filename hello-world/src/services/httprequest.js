import axios from "axios"
import {ref} from 'vue';
const Vue = ref('');

export default Vue => {
    Object.defineProperty(Vue.prototype, "$httpRequest", {
      get: () => ({
        get: async (url, cb) => {
          try {
            const res = await axios.get(url);
            cb(null, res);
          } catch (e) {
            cb(e, null);
          }
        },

        post: async (url, payloads, cb) => {
          try {
            const res = await axios.post(url, payloads);
            cb(null, res);
          } catch (e) {
            cb(e, null);
          }
        },
        delete: () => async (url, cb) => {
          try {
            const res = await axios.delete(url);
            cb(null, res);
          } catch (e) {
            cb(e, null);
          }
        },
      }),
    });
}