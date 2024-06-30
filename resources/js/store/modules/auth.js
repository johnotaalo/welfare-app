import http from "../../plugins/http";
import {commit} from "lodash/seq";

const state = {
    user: null,
    isUserRetrieved: false,
    authLoading: 0
};

const mutations = {
    setUser(state, user){
        state.user = user;
        state.isUserRetrieved = true
    },
    setAuthLoadingOn(state){
        state.authLoading++
    },
    setAuthLoadingOff(state){
        state.authLoading--
    }
};

const actions = {
    async fetchUser({ commit }){
        try {
            commit("setAuthLoadingOn")
            const response = await http.get("/user-details");
            commit("setUser", response.data)
            commit("setAuthLoadingOff")
        }catch (error) {
            console.log("Error fetching user details: ", error)
        }
    }
};

const getters = {
    isAuthenticated(state) {
        return !!state.user
    }
};


export default {
    namespaced: true,
    state,
    mutations,
    actions,
    getters
}
