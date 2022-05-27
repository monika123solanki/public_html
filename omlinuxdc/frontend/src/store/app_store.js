
/**
    App Vuex Store
	Access store object from any component use:

    this.$store.state.propName
    this.store.getters.getProp 
    this.$store.commit("setProps")
    this.store.dispatch("actionName")
*/

import { ApiService } from '../services/api';

//Store state
const state = {
    propName: "Store state value",
}

//Store getters
const getters = {
    getProp(state) {
        return state.propName
    },
}

//Store mutations
const mutations = {
    setProp(state, records) {
        state.propName = records
    },
}

//Store actions
const actions = {
    fetchData: ({ commit }, arg) => {
        let apiPath = "/controller/action";
        return new Promise((resolve, reject) => {
            ApiService.get(apiPath).then(resp => {
                let data = resp.data;
                commit("setProp", data);
                resolve(resp)
            })
            .catch(err => {
                reject(err)
            })
        })
    },
}

export {
   state,
   getters,
   mutations,
   actions,
}
