import Vue from "vue";
import axios from "axios";

const instance = axios.create({
    baseURL: "/api",
    withCredentials: true, // send cookies with request
})

const initializeCsrfToken = async () => {
    await axios.get("/sanctum/csrf-cookie")
}

instance.interceptors.request.use(
    async config => {
        if (!instance.defaults.headers.common['X-XSRF-TOKEN']){
            await initializeCsrfToken()
            const xsrfToken = document.cookie
                .split('; ')
                .find(row => row.startsWith('XSRF-TOKEN'))
                ?.split('=')[1];
            instance.defaults.headers.common['X-XSRF-TOKEN'] = xsrfToken;
        }

        return config;
    },
    error => {
        return Promise.reject(error);
    }
);

Vue.prototype.$axios = instance;
export default instance;
