import axios from "axios";

export default (function () {
  const API = axios.create({
    baseURL: process.env.VUE_APP_API_URL,
  });

  
   const Get = process.env.VUE_APP_API_URL;


  return Get
})();
