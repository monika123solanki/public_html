<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// api routes that need auth

Route::middleware(['auth:api'])->group(function () {
	
});



/* routes for Power_Management Controller  */	
	Route::get('power_management', 'Power_ManagementController@index');
	Route::get('power_management/index', 'Power_ManagementController@index');
	Route::get('power_management/index/{filter?}/{filtervalue?}', 'Power_ManagementController@index');	
	Route::get('power_management/view/{rec_id}', 'Power_ManagementController@view');	
	Route::post('power_management/add', 'Power_ManagementController@add');	
	Route::any('power_management/edit/{rec_id}', 'Power_ManagementController@edit');	
	Route::any('power_management/delete/{rec_id}', 'Power_ManagementController@delete');

/* routes for Permissions Controller  */	
	Route::get('permissions', 'PermissionsController@index');
	Route::get('permissions/index', 'PermissionsController@index');
	Route::get('permissions/index/{filter?}/{filtervalue?}', 'PermissionsController@index');	
	Route::get('permissions/view/{rec_id}', 'PermissionsController@view');	
	Route::post('permissions/add', 'PermissionsController@add');	
	Route::any('permissions/edit/{rec_id}', 'PermissionsController@edit');	
	Route::any('permissions/delete/{rec_id}', 'PermissionsController@delete');

/* routes for Install_Controlpanel Controller  */	
	Route::get('install_controlpanel', 'Install_ControlpanelController@index');
	Route::get('install_controlpanel/index', 'Install_ControlpanelController@index');
	Route::get('install_controlpanel/index/{filter?}/{filtervalue?}', 'Install_ControlpanelController@index');	
	Route::get('install_controlpanel/view/{rec_id}', 'Install_ControlpanelController@view');	
	Route::post('install_controlpanel/add', 'Install_ControlpanelController@add');	
	Route::any('install_controlpanel/edit/{rec_id}', 'Install_ControlpanelController@edit');	
	Route::any('install_controlpanel/delete/{rec_id}', 'Install_ControlpanelController@delete');

/* routes for District Controller  */	
	Route::get('district', 'DistrictController@index');
	Route::get('district/index', 'DistrictController@index');
	Route::get('district/index/{filter?}/{filtervalue?}', 'DistrictController@index');	
	Route::get('district/view/{rec_id}', 'DistrictController@view');	
	Route::post('district/add', 'DistrictController@add');	
	Route::any('district/edit/{rec_id}', 'DistrictController@edit');	
	Route::any('district/delete/{rec_id}', 'DistrictController@delete');

/* routes for City Controller  */	
	Route::get('city', 'CityController@index');
	Route::get('city/index', 'CityController@index');
	Route::get('city/index/{filter?}/{filtervalue?}', 'CityController@index');	
	Route::get('city/view/{rec_id}', 'CityController@view');	
	Route::post('city/add', 'CityController@add');	
	Route::any('city/edit/{rec_id}', 'CityController@edit');	
	Route::any('city/delete/{rec_id}', 'CityController@delete');

/* routes for State Controller  */	
	Route::get('state', 'StateController@index');
	Route::get('state/index', 'StateController@index');
	Route::get('state/index/{filter?}/{filtervalue?}', 'StateController@index');	
	Route::get('state/view/{rec_id}', 'StateController@view');	
	Route::post('state/add', 'StateController@add');	
	Route::any('state/edit/{rec_id}', 'StateController@edit');	
	Route::any('state/delete/{rec_id}', 'StateController@delete');

/* routes for Servers_Details Controller  */	
	Route::get('servers_details', 'Servers_DetailsController@index');
	Route::get('servers_details/index', 'Servers_DetailsController@index');
	Route::get('servers_details/index/{filter?}/{filtervalue?}', 'Servers_DetailsController@index');	
	Route::get('servers_details/view/{rec_id}', 'Servers_DetailsController@view');	
	Route::post('servers_details/add', 'Servers_DetailsController@add');	
	Route::any('servers_details/edit/{rec_id}', 'Servers_DetailsController@edit');	
	Route::any('servers_details/delete/{rec_id}', 'Servers_DetailsController@delete');

/* routes for Server_Commands Controller  */	
	Route::get('server_commands', 'Server_CommandsController@index');
	Route::get('server_commands/index', 'Server_CommandsController@index');
	Route::get('server_commands/index/{filter?}/{filtervalue?}', 'Server_CommandsController@index');	
	Route::get('server_commands/view/{rec_id}', 'Server_CommandsController@view');	
	Route::post('server_commands/add', 'Server_CommandsController@add');	
	Route::any('server_commands/edit/{rec_id}', 'Server_CommandsController@edit');	
	Route::any('server_commands/delete/{rec_id}', 'Server_CommandsController@delete');

/* routes for Roles Controller  */	
	Route::get('roles', 'RolesController@index');
	Route::get('roles/index', 'RolesController@index');
	Route::get('roles/index/{filter?}/{filtervalue?}', 'RolesController@index');	
	Route::get('roles/view/{rec_id}', 'RolesController@view');	
	Route::post('roles/add', 'RolesController@add');	
	Route::any('roles/edit/{rec_id}', 'RolesController@edit');	
	Route::any('roles/delete/{rec_id}', 'RolesController@delete');

/* routes for Role_Has_Permissions Controller  */

/* routes for Remot_Servers Controller  */	
	Route::get('remot_servers', 'Remot_ServersController@index');
	Route::get('remot_servers/index', 'Remot_ServersController@index');
	Route::get('remot_servers/index/{filter?}/{filtervalue?}', 'Remot_ServersController@index');	
	Route::get('remot_servers/view/{rec_id}', 'Remot_ServersController@view');	
	Route::post('remot_servers/add', 'Remot_ServersController@add');	
	Route::any('remot_servers/edit/{rec_id}', 'Remot_ServersController@edit');	
	Route::any('remot_servers/delete/{rec_id}', 'Remot_ServersController@delete');

/* routes for Users Controller  */	
	Route::get('users', 'UsersController@index');
	Route::get('users/index', 'UsersController@index');
	Route::get('users/index/{filter?}/{filtervalue?}', 'UsersController@index');	
	Route::get('users/view/{rec_id}', 'UsersController@view');	
	Route::post('users/add', 'UsersController@add');	
	Route::any('users/edit/{rec_id}', 'UsersController@edit');	
	Route::any('users/delete/{rec_id}', 'UsersController@delete');

/* routes for Templates Controller  */	
	Route::get('templates', 'TemplatesController@index');
	Route::get('templates/index', 'TemplatesController@index');
	Route::get('templates/index/{filter?}/{filtervalue?}', 'TemplatesController@index');	
	Route::get('templates/view/{rec_id}', 'TemplatesController@view');	
	Route::post('templates/add', 'TemplatesController@add');	
	Route::any('templates/edit/{rec_id}', 'TemplatesController@edit');	
	Route::any('templates/delete/{rec_id}', 'TemplatesController@delete');

/* routes for Tasks Controller  */	
	Route::get('tasks', 'TasksController@index');
	Route::get('tasks/index', 'TasksController@index');
	Route::get('tasks/index/{filter?}/{filtervalue?}', 'TasksController@index');	
	Route::get('tasks/view/{rec_id}', 'TasksController@view');	
	Route::post('tasks/add', 'TasksController@add');	
	Route::any('tasks/edit/{rec_id}', 'TasksController@edit');	
	Route::any('tasks/delete/{rec_id}', 'TasksController@delete');
	
Route::get('components_data/select_location_option_list/{arg1?}', 'Components_dataController@select_location_option_list');

Route::post('fileuploader/upload/{fieldname}', 'FileUploaderController@upload');
Route::post('fileuploader/s3upload/{fieldname}', 'FileUploaderController@s3upload');
Route::post('fileuploader/remove_temp_file', 'FileUploaderController@remove_temp_file');