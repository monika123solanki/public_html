import Vue from 'vue'
import Vuex from 'vuex'
import { pageComponents } from "./page_components.js"
import { state, getters, mutations, actions } from "./app_store.js"
import { power_management } from "./power_management.js"
import { permissions } from "./permissions.js"
import { install_controlpanel } from "./install_controlpanel.js"
import { district } from "./district.js"
import { city } from "./city.js"
import { state } from "./state.js"
import { servers_details } from "./servers_details.js"
import { server_commands } from "./server_commands.js"
import { roles } from "./roles.js"
import { remot_servers } from "./remot_servers.js"
import { users } from "./users.js"
import { templates } from "./templates.js"
import { tasks } from "./tasks.js"
Vue.use(Vuex)
export default function (/* { ssrContext } */) {
	const Store = new Vuex.Store({
		state,
		getters,
		mutations,
		actions,
		modules: {
			pageComponents,
			power_management,
		permissions,
		install_controlpanel,
		district,
		city,
		state,
		servers_details,
		server_commands,
		roles,
		remot_servers,
		users,
		templates,
		tasks
		},
		// enable strict mode (adds overhead!)
		// for dev mode only
		strict: process.env.DEV
	})
	return Store
}