
import { i18n } from 'boot/i18n.js';
import { StorageService } from './services/storage';
let locale = StorageService.getLocale();
if (locale) {
  i18n.locale = locale;
}

export const AppMenus = {
    
	navbarTopRightItems: [],
	navbarTopLeftItems: [],
	navbarSideLeftItems: [
  {
    "path": "/home",
    "label": i18n.t('home'),
    "icon": "extension",
    "iconcolor": "",
    "target": "",
    "submenu": []
  },
  {
    "path": "/power_management",
    "label": i18n.t('power_management'),
    "icon": "extension",
    "iconcolor": "",
    "target": "",
    "submenu": []
  },
  {
    "path": "/permissions",
    "label": i18n.t('permissions'),
    "icon": "extension",
    "iconcolor": "",
    "target": "",
    "submenu": []
  },
  {
    "path": "/install_controlpanel",
    "label": i18n.t('install_controlpanel'),
    "icon": "extension",
    "iconcolor": "",
    "target": "",
    "submenu": []
  },
  {
    "path": "/district",
    "label": i18n.t('district'),
    "icon": "extension",
    "iconcolor": "",
    "target": "",
    "submenu": []
  },
  {
    "path": "/city",
    "label": i18n.t('city'),
    "icon": "extension",
    "iconcolor": "",
    "target": "",
    "submenu": []
  },
  {
    "path": "/state",
    "label": i18n.t('state'),
    "icon": "extension",
    "iconcolor": "",
    "target": "",
    "submenu": []
  },
  {
    "path": "/servers_details",
    "label": i18n.t('servers_details'),
    "icon": "extension",
    "iconcolor": "",
    "target": "",
    "submenu": []
  },
  {
    "path": "/server_commands",
    "label": i18n.t('server_commands'),
    "icon": "extension",
    "iconcolor": "",
    "target": "",
    "submenu": []
  },
  {
    "path": "/roles",
    "label": i18n.t('roles'),
    "icon": "extension",
    "iconcolor": "",
    "target": "",
    "submenu": []
  },
  {
    "path": "/remot_servers",
    "label": i18n.t('remot_servers'),
    "icon": "extension",
    "iconcolor": "",
    "target": "",
    "submenu": []
  },
  {
    "path": "/users",
    "label": i18n.t('users'),
    "icon": "extension",
    "iconcolor": "",
    "target": "",
    "submenu": []
  },
  {
    "path": "/templates",
    "label": i18n.t('templates'),
    "icon": "extension",
    "iconcolor": "",
    "target": "",
    "submenu": []
  },
  {
    "path": "/tasks",
    "label": i18n.t('tasks'),
    "icon": "extension",
    "iconcolor": "",
    "target": "",
    "submenu": []
  }
],
	Power_ManagementTableHeaderItems: [
  {
    "label": i18n.t('id'),
    "align": "left",
    "sortable": false,
    "name": "id",
    "field": "id"
  },
  {
    "label": i18n.t('bettry'),
    "align": "left",
    "sortable": false,
    "name": "bettry",
    "field": "bettry"
  },
  {
    "label": i18n.t('inverter'),
    "align": "left",
    "sortable": false,
    "name": "inverter",
    "field": "inverter"
  },
  {
    "label": i18n.t('power_consumes'),
    "align": "left",
    "sortable": false,
    "name": "power_consumes",
    "field": "power_consumes"
  },
  {
    "label": i18n.t('backup_hours'),
    "align": "left",
    "sortable": false,
    "name": "backup_hours",
    "field": "backup_hours"
  },
  {
    "label": i18n.t('estimated_bill_month'),
    "align": "left",
    "sortable": false,
    "name": "estimated_bill_month",
    "field": "estimated_bill_month"
  },
  {
    "label": i18n.t('estimated_cost_per_day'),
    "align": "left",
    "sortable": false,
    "name": "estimated_cost_per_day",
    "field": "estimated_cost_per_day"
  },
  {
    "label": i18n.t('estimated_cost_month'),
    "align": "left",
    "sortable": false,
    "name": "estimated_cost_month",
    "field": "estimated_cost_month"
  },
  {
    "label": i18n.t('created_at'),
    "align": "left",
    "sortable": false,
    "name": "created_at",
    "field": "created_at"
  },
  {
    "label": i18n.t('updated_at'),
    "align": "left",
    "sortable": false,
    "name": "updated_at",
    "field": "updated_at"
  },
  {
    "label": i18n.t('action'),
    "align": "right",
    "sortable": false,
    "name": "btnactions",
    "field": ""
  }
],
	bettryItems: [    

    ],
	PermissionsTableHeaderItems: [
  {
    "label": i18n.t('id'),
    "align": "left",
    "sortable": false,
    "name": "id",
    "field": "id"
  },
  {
    "label": i18n.t('permission_name'),
    "align": "left",
    "sortable": false,
    "name": "permission_name",
    "field": "permission_name"
  },
  {
    "label": i18n.t('created_at'),
    "align": "left",
    "sortable": false,
    "name": "created_at",
    "field": "created_at"
  },
  {
    "label": i18n.t('updated_at'),
    "align": "left",
    "sortable": false,
    "name": "updated_at",
    "field": "updated_at"
  },
  {
    "label": i18n.t('action'),
    "align": "right",
    "sortable": false,
    "name": "btnactions",
    "field": ""
  }
],
	Install_ControlpanelTableHeaderItems: [
  {
    "label": i18n.t('id'),
    "align": "left",
    "sortable": false,
    "name": "id",
    "field": "id"
  },
  {
    "label": i18n.t('select_remote_server'),
    "align": "left",
    "sortable": false,
    "name": "select_remote_server",
    "field": "select_remote_server"
  },
  {
    "label": i18n.t('installer_name'),
    "align": "left",
    "sortable": false,
    "name": "installer_name",
    "field": "installer_name"
  },
  {
    "label": i18n.t('product_name'),
    "align": "left",
    "sortable": false,
    "name": "product_name",
    "field": "product_name"
  },
  {
    "label": i18n.t('created_at'),
    "align": "left",
    "sortable": false,
    "name": "created_at",
    "field": "created_at"
  },
  {
    "label": i18n.t('updated_at'),
    "align": "left",
    "sortable": false,
    "name": "updated_at",
    "field": "updated_at"
  },
  {
    "label": i18n.t('action'),
    "align": "right",
    "sortable": false,
    "name": "btnactions",
    "field": ""
  }
],
	DistrictTableHeaderItems: [
  {
    "label": i18n.t('districtid'),
    "align": "left",
    "sortable": false,
    "name": "districtid",
    "field": "districtid"
  },
  {
    "label": i18n.t('district_title'),
    "align": "left",
    "sortable": false,
    "name": "district_title",
    "field": "district_title"
  },
  {
    "label": i18n.t('state_id'),
    "align": "left",
    "sortable": false,
    "name": "state_id",
    "field": "state_id"
  },
  {
    "label": i18n.t('district_description'),
    "align": "left",
    "sortable": false,
    "name": "district_description",
    "field": "district_description"
  },
  {
    "label": i18n.t('district_status'),
    "align": "left",
    "sortable": false,
    "name": "district_status",
    "field": "district_status"
  },
  {
    "label": i18n.t('action'),
    "align": "right",
    "sortable": false,
    "name": "btnactions",
    "field": ""
  }
],
	CityTableHeaderItems: [
  {
    "label": i18n.t('id'),
    "align": "left",
    "sortable": false,
    "name": "id",
    "field": "id"
  },
  {
    "label": i18n.t('name'),
    "align": "left",
    "sortable": false,
    "name": "name",
    "field": "name"
  },
  {
    "label": i18n.t('districtid'),
    "align": "left",
    "sortable": false,
    "name": "districtid",
    "field": "districtid"
  },
  {
    "label": i18n.t('state_id'),
    "align": "left",
    "sortable": false,
    "name": "state_id",
    "field": "state_id"
  },
  {
    "label": i18n.t('description'),
    "align": "left",
    "sortable": false,
    "name": "description",
    "field": "description"
  },
  {
    "label": i18n.t('status'),
    "align": "left",
    "sortable": false,
    "name": "status",
    "field": "status"
  },
  {
    "label": i18n.t('action'),
    "align": "right",
    "sortable": false,
    "name": "btnactions",
    "field": ""
  }
],
	StateTableHeaderItems: [
  {
    "label": i18n.t('state_id'),
    "align": "left",
    "sortable": false,
    "name": "state_id",
    "field": "state_id"
  },
  {
    "label": i18n.t('state_title'),
    "align": "left",
    "sortable": false,
    "name": "state_title",
    "field": "state_title"
  },
  {
    "label": i18n.t('state_description'),
    "align": "left",
    "sortable": false,
    "name": "state_description",
    "field": "state_description"
  },
  {
    "label": i18n.t('status'),
    "align": "left",
    "sortable": false,
    "name": "status",
    "field": "status"
  },
  {
    "label": i18n.t('action'),
    "align": "right",
    "sortable": false,
    "name": "btnactions",
    "field": ""
  }
],
	Servers_DetailsTableHeaderItems: [
  {
    "label": i18n.t('id'),
    "align": "left",
    "sortable": false,
    "name": "id",
    "field": "id"
  },
  {
    "label": i18n.t('server_name'),
    "align": "left",
    "sortable": false,
    "name": "server_name",
    "field": "server_name"
  },
  {
    "label": i18n.t('server_ip'),
    "align": "left",
    "sortable": false,
    "name": "server_ip",
    "field": "server_ip"
  },
  {
    "label": i18n.t('machine_types'),
    "align": "left",
    "sortable": false,
    "name": "machine_types",
    "field": "machine_types"
  },
  {
    "label": i18n.t('isp_providers'),
    "align": "left",
    "sortable": false,
    "name": "isp_providers",
    "field": "isp_providers"
  },
  {
    "label": i18n.t('backup_provier'),
    "align": "left",
    "sortable": false,
    "name": "backup_provier",
    "field": "backup_provier"
  },
  {
    "label": i18n.t('internet_cost'),
    "align": "left",
    "sortable": false,
    "name": "internet_cost",
    "field": "internet_cost"
  },
  {
    "label": i18n.t('created_at'),
    "align": "left",
    "sortable": false,
    "name": "created_at",
    "field": "created_at"
  },
  {
    "label": i18n.t('updated_at'),
    "align": "left",
    "sortable": false,
    "name": "updated_at",
    "field": "updated_at"
  },
  {
    "label": i18n.t('action'),
    "align": "right",
    "sortable": false,
    "name": "btnactions",
    "field": ""
  }
],
	Server_CommandsTableHeaderItems: [
  {
    "label": i18n.t('id'),
    "align": "left",
    "sortable": false,
    "name": "id",
    "field": "id"
  },
  {
    "label": i18n.t('commands_name'),
    "align": "left",
    "sortable": false,
    "name": "commands_name",
    "field": "commands_name"
  },
  {
    "label": i18n.t('command_actions'),
    "align": "left",
    "sortable": false,
    "name": "command_actions",
    "field": "command_actions"
  },
  {
    "label": i18n.t('created_at'),
    "align": "left",
    "sortable": false,
    "name": "created_at",
    "field": "created_at"
  },
  {
    "label": i18n.t('updated_at'),
    "align": "left",
    "sortable": false,
    "name": "updated_at",
    "field": "updated_at"
  },
  {
    "label": i18n.t('action'),
    "align": "right",
    "sortable": false,
    "name": "btnactions",
    "field": ""
  }
],
	RolesTableHeaderItems: [
  {
    "label": i18n.t('id'),
    "align": "left",
    "sortable": false,
    "name": "id",
    "field": "id"
  },
  {
    "label": i18n.t('role_name'),
    "align": "left",
    "sortable": false,
    "name": "role_name",
    "field": "role_name"
  },
  {
    "label": i18n.t('created_at'),
    "align": "left",
    "sortable": false,
    "name": "created_at",
    "field": "created_at"
  },
  {
    "label": i18n.t('updated_at'),
    "align": "left",
    "sortable": false,
    "name": "updated_at",
    "field": "updated_at"
  },
  {
    "label": i18n.t('action'),
    "align": "right",
    "sortable": false,
    "name": "btnactions",
    "field": ""
  }
],
	Remot_ServersTableHeaderItems: [
  {
    "label": i18n.t('id'),
    "align": "left",
    "sortable": false,
    "name": "id",
    "field": "id"
  },
  {
    "label": i18n.t('server_name'),
    "align": "left",
    "sortable": false,
    "name": "server_name",
    "field": "server_name"
  },
  {
    "label": i18n.t('server_ip'),
    "align": "left",
    "sortable": false,
    "name": "server_ip",
    "field": "server_ip"
  },
  {
    "label": i18n.t('ssh_port'),
    "align": "left",
    "sortable": false,
    "name": "ssh_port",
    "field": "ssh_port"
  },
  {
    "label": i18n.t('user_name'),
    "align": "left",
    "sortable": false,
    "name": "user_name",
    "field": "user_name"
  },
  {
    "label": i18n.t('created_at'),
    "align": "left",
    "sortable": false,
    "name": "created_at",
    "field": "created_at"
  },
  {
    "label": i18n.t('updated_at'),
    "align": "left",
    "sortable": false,
    "name": "updated_at",
    "field": "updated_at"
  },
  {
    "label": i18n.t('add_servers'),
    "align": "left",
    "sortable": false,
    "name": "add_servers",
    "field": "add_servers"
  },
  {
    "label": i18n.t('action'),
    "align": "right",
    "sortable": false,
    "name": "btnactions",
    "field": ""
  }
],
	UsersTableHeaderItems: [
  {
    "label": i18n.t('id'),
    "align": "left",
    "sortable": false,
    "name": "id",
    "field": "id"
  },
  {
    "label": i18n.t('first_name'),
    "align": "left",
    "sortable": false,
    "name": "first_name",
    "field": "first_name"
  },
  {
    "label": i18n.t('last_name'),
    "align": "left",
    "sortable": false,
    "name": "last_name",
    "field": "last_name"
  },
  {
    "label": i18n.t('profile_picture'),
    "align": "left",
    "sortable": false,
    "name": "profile_picture",
    "field": "profile_picture"
  },
  {
    "label": i18n.t('email'),
    "align": "left",
    "sortable": false,
    "name": "email",
    "field": "email"
  },
  {
    "label": i18n.t('special_instruction'),
    "align": "left",
    "sortable": false,
    "name": "special_instruction",
    "field": "special_instruction"
  },
  {
    "label": i18n.t('mobile_number'),
    "align": "left",
    "sortable": false,
    "name": "mobile_number",
    "field": "mobile_number"
  },
  {
    "label": i18n.t('state_id'),
    "align": "left",
    "sortable": false,
    "name": "state_id",
    "field": "state_id"
  },
  {
    "label": i18n.t('role_id'),
    "align": "left",
    "sortable": false,
    "name": "role_id",
    "field": "role_id"
  },
  {
    "label": i18n.t('city_id'),
    "align": "left",
    "sortable": false,
    "name": "city_id",
    "field": "city_id"
  },
  {
    "label": i18n.t('created_at'),
    "align": "left",
    "sortable": false,
    "name": "created_at",
    "field": "created_at"
  },
  {
    "label": i18n.t('updated_at'),
    "align": "left",
    "sortable": false,
    "name": "updated_at",
    "field": "updated_at"
  },
  {
    "label": i18n.t('action'),
    "align": "right",
    "sortable": false,
    "name": "btnactions",
    "field": ""
  }
],
	TemplatesTableHeaderItems: [
  {
    "label": i18n.t('id'),
    "align": "left",
    "sortable": false,
    "name": "id",
    "field": "id"
  },
  {
    "label": i18n.t('templates_name'),
    "align": "left",
    "sortable": false,
    "name": "templates_name",
    "field": "templates_name"
  },
  {
    "label": i18n.t('templates_type'),
    "align": "left",
    "sortable": false,
    "name": "templates_type",
    "field": "templates_type"
  },
  {
    "label": i18n.t('templates_command'),
    "align": "left",
    "sortable": false,
    "name": "templates_command",
    "field": "templates_command"
  },
  {
    "label": i18n.t('created_at'),
    "align": "left",
    "sortable": false,
    "name": "created_at",
    "field": "created_at"
  },
  {
    "label": i18n.t('updated_at'),
    "align": "left",
    "sortable": false,
    "name": "updated_at",
    "field": "updated_at"
  },
  {
    "label": i18n.t('action'),
    "align": "right",
    "sortable": false,
    "name": "btnactions",
    "field": ""
  }
],
	TasksTableHeaderItems: [
  {
    "label": i18n.t('id'),
    "align": "left",
    "sortable": false,
    "name": "id",
    "field": "id"
  },
  {
    "label": i18n.t('user_id'),
    "align": "left",
    "sortable": false,
    "name": "user_id",
    "field": "user_id"
  },
  {
    "label": i18n.t('task_name'),
    "align": "left",
    "sortable": false,
    "name": "task_name",
    "field": "task_name"
  },
  {
    "label": i18n.t('task_description'),
    "align": "left",
    "sortable": false,
    "name": "task_description",
    "field": "task_description"
  },
  {
    "label": i18n.t('task_status'),
    "align": "left",
    "sortable": false,
    "name": "task_status",
    "field": "task_status"
  },
  {
    "label": i18n.t('select_location'),
    "align": "left",
    "sortable": false,
    "name": "select_location",
    "field": "select_location"
  },
  {
    "label": i18n.t('action'),
    "align": "right",
    "sortable": false,
    "name": "btnactions",
    "field": ""
  }
],

    exportFormats: {
        print: {
			label: 'Print',
			color: 'blue',
            icon: 'print',
            id: 'print',
            ext: '',
        },
        pdf: {
			label: 'Pdf',
			color: 'red',
            icon: 'picture_as_pdf',
            id: 'pdf',
            ext: 'pdf',
        },
        excel: {
			label: 'Excel',
			color: 'green',
            icon: 'grid_on',
            id: 'excel',
            ext: 'xlsx',
        },
        csv: {
			label: 'Csv',
			color: 'teal',
            icon: 'grid_on',
            id: 'csv',
            ext: 'csv',
        },
    },
    locales: {
  "fr": "French",
  "ru": "Russian",
  "zh_CN": "Chinese",
  "en": "English",
  "it": "Italian",
  "hi": "Hindi",
  "pt_PT": "Portuguese",
  "de": "German",
  "es": "Spanish",
  "ar": "Arabic"
}
}