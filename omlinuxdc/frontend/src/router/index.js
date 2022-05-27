
import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter)
let routes = [
	{
		name: 'main',
		path: '/',
		component: () => import('layouts/MainLayout.vue'),
		children: [
			
			{ 
				path: '/(home)?', 
				name: 'home' , 
				component: () => import('pages/home/home.vue'),
				props: true
			},
			//Dashboard routes


//power_management routes
			{ 
				path: '/power_management/', 
				name: 'power_managementlist', 
				component: () => import('pages/power_management/list.vue'), 
				props: true
			},
			{ 
				path: '/power_management/(list|index)/:fieldName?/:fieldValue?', 
				name: 'power_managementlistfilter', 
				component: () => import('pages/power_management/list.vue'), 
				props: true
			},
	
			{ 
				path: '/power_management/view/:id', 
				name: 'power_managementview', 
				component: () => import('pages/power_management/view.vue'), 
				props: true
			},
	
			{ 
				path: '/power_management/add', 
				name: 'power_managementadd', 
				component: () => import('pages/power_management/add.vue'), 
				props: true
			},
	
			{ 
				path: '/power_management/edit/:id', 
				name: 'power_managementedit', 
				component: () => import('pages/power_management/edit.vue'), 
				props: true
			},
		

//permissions routes
			{ 
				path: '/permissions/', 
				name: 'permissionslist', 
				component: () => import('pages/permissions/list.vue'), 
				props: true
			},
			{ 
				path: '/permissions/(list|index)/:fieldName?/:fieldValue?', 
				name: 'permissionslistfilter', 
				component: () => import('pages/permissions/list.vue'), 
				props: true
			},
	
			{ 
				path: '/permissions/view/:id', 
				name: 'permissionsview', 
				component: () => import('pages/permissions/view.vue'), 
				props: true
			},
	
			{ 
				path: '/permissions/add', 
				name: 'permissionsadd', 
				component: () => import('pages/permissions/add.vue'), 
				props: true
			},
	
			{ 
				path: '/permissions/edit/:id', 
				name: 'permissionsedit', 
				component: () => import('pages/permissions/edit.vue'), 
				props: true
			},
		

//install_controlpanel routes
			{ 
				path: '/install_controlpanel/', 
				name: 'install_controlpanellist', 
				component: () => import('pages/install_controlpanel/list.vue'), 
				props: true
			},
			{ 
				path: '/install_controlpanel/(list|index)/:fieldName?/:fieldValue?', 
				name: 'install_controlpanellistfilter', 
				component: () => import('pages/install_controlpanel/list.vue'), 
				props: true
			},
	
			{ 
				path: '/install_controlpanel/view/:id', 
				name: 'install_controlpanelview', 
				component: () => import('pages/install_controlpanel/view.vue'), 
				props: true
			},
	
			{ 
				path: '/install_controlpanel/add', 
				name: 'install_controlpaneladd', 
				component: () => import('pages/install_controlpanel/add.vue'), 
				props: true
			},
	
			{ 
				path: '/install_controlpanel/edit/:id', 
				name: 'install_controlpaneledit', 
				component: () => import('pages/install_controlpanel/edit.vue'), 
				props: true
			},
		

//district routes
			{ 
				path: '/district/', 
				name: 'districtlist', 
				component: () => import('pages/district/list.vue'), 
				props: true
			},
			{ 
				path: '/district/(list|index)/:fieldName?/:fieldValue?', 
				name: 'districtlistfilter', 
				component: () => import('pages/district/list.vue'), 
				props: true
			},
	
			{ 
				path: '/district/view/:id', 
				name: 'districtview', 
				component: () => import('pages/district/view.vue'), 
				props: true
			},
	
			{ 
				path: '/district/add', 
				name: 'districtadd', 
				component: () => import('pages/district/add.vue'), 
				props: true
			},
	
			{ 
				path: '/district/edit/:id', 
				name: 'districtedit', 
				component: () => import('pages/district/edit.vue'), 
				props: true
			},
		

//city routes
			{ 
				path: '/city/', 
				name: 'citylist', 
				component: () => import('pages/city/list.vue'), 
				props: true
			},
			{ 
				path: '/city/(list|index)/:fieldName?/:fieldValue?', 
				name: 'citylistfilter', 
				component: () => import('pages/city/list.vue'), 
				props: true
			},
	
			{ 
				path: '/city/view/:id', 
				name: 'cityview', 
				component: () => import('pages/city/view.vue'), 
				props: true
			},
	
			{ 
				path: '/city/add', 
				name: 'cityadd', 
				component: () => import('pages/city/add.vue'), 
				props: true
			},
	
			{ 
				path: '/city/edit/:id', 
				name: 'cityedit', 
				component: () => import('pages/city/edit.vue'), 
				props: true
			},
		

//state routes
			{ 
				path: '/state/', 
				name: 'statelist', 
				component: () => import('pages/state/list.vue'), 
				props: true
			},
			{ 
				path: '/state/(list|index)/:fieldName?/:fieldValue?', 
				name: 'statelistfilter', 
				component: () => import('pages/state/list.vue'), 
				props: true
			},
	
			{ 
				path: '/state/view/:id', 
				name: 'stateview', 
				component: () => import('pages/state/view.vue'), 
				props: true
			},
	
			{ 
				path: '/state/add', 
				name: 'stateadd', 
				component: () => import('pages/state/add.vue'), 
				props: true
			},
	
			{ 
				path: '/state/edit/:id', 
				name: 'stateedit', 
				component: () => import('pages/state/edit.vue'), 
				props: true
			},
		

//servers_details routes
			{ 
				path: '/servers_details/', 
				name: 'servers_detailslist', 
				component: () => import('pages/servers_details/list.vue'), 
				props: true
			},
			{ 
				path: '/servers_details/(list|index)/:fieldName?/:fieldValue?', 
				name: 'servers_detailslistfilter', 
				component: () => import('pages/servers_details/list.vue'), 
				props: true
			},
	
			{ 
				path: '/servers_details/view/:id', 
				name: 'servers_detailsview', 
				component: () => import('pages/servers_details/view.vue'), 
				props: true
			},
	
			{ 
				path: '/servers_details/add', 
				name: 'servers_detailsadd', 
				component: () => import('pages/servers_details/add.vue'), 
				props: true
			},
	
			{ 
				path: '/servers_details/edit/:id', 
				name: 'servers_detailsedit', 
				component: () => import('pages/servers_details/edit.vue'), 
				props: true
			},
		

//server_commands routes
			{ 
				path: '/server_commands/', 
				name: 'server_commandslist', 
				component: () => import('pages/server_commands/list.vue'), 
				props: true
			},
			{ 
				path: '/server_commands/(list|index)/:fieldName?/:fieldValue?', 
				name: 'server_commandslistfilter', 
				component: () => import('pages/server_commands/list.vue'), 
				props: true
			},
	
			{ 
				path: '/server_commands/view/:id', 
				name: 'server_commandsview', 
				component: () => import('pages/server_commands/view.vue'), 
				props: true
			},
	
			{ 
				path: '/server_commands/add', 
				name: 'server_commandsadd', 
				component: () => import('pages/server_commands/add.vue'), 
				props: true
			},
	
			{ 
				path: '/server_commands/edit/:id', 
				name: 'server_commandsedit', 
				component: () => import('pages/server_commands/edit.vue'), 
				props: true
			},
		

//roles routes
			{ 
				path: '/roles/', 
				name: 'roleslist', 
				component: () => import('pages/roles/list.vue'), 
				props: true
			},
			{ 
				path: '/roles/(list|index)/:fieldName?/:fieldValue?', 
				name: 'roleslistfilter', 
				component: () => import('pages/roles/list.vue'), 
				props: true
			},
	
			{ 
				path: '/roles/view/:id', 
				name: 'rolesview', 
				component: () => import('pages/roles/view.vue'), 
				props: true
			},
	
			{ 
				path: '/roles/add', 
				name: 'rolesadd', 
				component: () => import('pages/roles/add.vue'), 
				props: true
			},
	
			{ 
				path: '/roles/edit/:id', 
				name: 'rolesedit', 
				component: () => import('pages/roles/edit.vue'), 
				props: true
			},
		

//role_has_permissions routes

//remot_servers routes
			{ 
				path: '/remot_servers/', 
				name: 'remot_serverslist', 
				component: () => import('pages/remot_servers/list.vue'), 
				props: true
			},
			{ 
				path: '/remot_servers/(list|index)/:fieldName?/:fieldValue?', 
				name: 'remot_serverslistfilter', 
				component: () => import('pages/remot_servers/list.vue'), 
				props: true
			},
	
			{ 
				path: '/remot_servers/view/:id', 
				name: 'remot_serversview', 
				component: () => import('pages/remot_servers/view.vue'), 
				props: true
			},
	
			{ 
				path: '/remot_servers/add', 
				name: 'remot_serversadd', 
				component: () => import('pages/remot_servers/add.vue'), 
				props: true
			},
	
			{ 
				path: '/remot_servers/edit/:id', 
				name: 'remot_serversedit', 
				component: () => import('pages/remot_servers/edit.vue'), 
				props: true
			},
		

//users routes
			{ 
				path: '/users/', 
				name: 'userslist', 
				component: () => import('pages/users/list.vue'), 
				props: true
			},
			{ 
				path: '/users/(list|index)/:fieldName?/:fieldValue?', 
				name: 'userslistfilter', 
				component: () => import('pages/users/list.vue'), 
				props: true
			},
	
			{ 
				path: '/users/view/:id', 
				name: 'usersview', 
				component: () => import('pages/users/view.vue'), 
				props: true
			},
	
			{ 
				path: '/users/add', 
				name: 'usersadd', 
				component: () => import('pages/users/add.vue'), 
				props: true
			},
	
			{ 
				path: '/users/edit/:id', 
				name: 'usersedit', 
				component: () => import('pages/users/edit.vue'), 
				props: true
			},
		

//templates routes
			{ 
				path: '/templates/', 
				name: 'templateslist', 
				component: () => import('pages/templates/list.vue'), 
				props: true
			},
			{ 
				path: '/templates/(list|index)/:fieldName?/:fieldValue?', 
				name: 'templateslistfilter', 
				component: () => import('pages/templates/list.vue'), 
				props: true
			},
	
			{ 
				path: '/templates/view/:id', 
				name: 'templatesview', 
				component: () => import('pages/templates/view.vue'), 
				props: true
			},
	
			{ 
				path: '/templates/add', 
				name: 'templatesadd', 
				component: () => import('pages/templates/add.vue'), 
				props: true
			},
	
			{ 
				path: '/templates/edit/:id', 
				name: 'templatesedit', 
				component: () => import('pages/templates/edit.vue'), 
				props: true
			},
		

//tasks routes
			{ 
				path: '/tasks/', 
				name: 'taskslist', 
				component: () => import('pages/tasks/list.vue'), 
				props: true
			},
			{ 
				path: '/tasks/(list|index)/:fieldName?/:fieldValue?', 
				name: 'taskslistfilter', 
				component: () => import('pages/tasks/list.vue'), 
				props: true
			},
	
			{ 
				path: '/tasks/view/:id', 
				name: 'tasksview', 
				component: () => import('pages/tasks/view.vue'), 
				props: true
			},
	
			{ 
				path: '/tasks/add', 
				name: 'tasksadd', 
				component: () => import('pages/tasks/add.vue'), 
				props: true
			},
	
			{ 
				path: '/tasks/edit/:id', 
				name: 'tasksedit', 
				component: () => import('pages/tasks/edit.vue'), 
				props: true
			},
		

			
			
			
			
			{ 
				path:  '/error/forbidden', 
				name: 'forbidden', 
				component: () => import('pages/errors/forbidden.vue'),
				props: true
			},
			{ 
				path: '/error/notfound', 
				name: 'notfound',
				component: () => import('pages/errors/pagenotfound.vue'),
				props: true
			}
		]
	},
];


/*
 * If not building with SSR mode, you can
 * directly export the Router instantiation;
 *
 * The function below can be async too; either use
 * async/await or return a Promise which resolves
 * with the Router instance.
 */

export default async function ({ store, ssrContext }) {
	let mainRoute = routes.find(x => x.name = "main");

	

	// Always leave this as last one
	if (process.env.MODE !== 'ssr') {
		mainRoute.children.push({path: '*', component: () => import('pages/errors/pagenotfound.vue')});
	}

	const Router = new VueRouter({
		scrollBehavior: () => ({ x: 0, y: 0 }),
		routes,
		// Leave these as they are and change in quasar.conf.js instead!
		// quasar.conf.js -> build -> vueRouterMode
		// quasar.conf.js -> build -> publicPath
		mode: process.env.VUE_ROUTER_MODE,
		base: process.env.VUE_ROUTER_BASE
	});
	return Router
}
