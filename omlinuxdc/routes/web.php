<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

	
	Route::get('', 'HomeController@index')->name('index');
	Route::get('home', 'HomeController@index')->name('home');




/* routes for Power_Management Controller */	
	Route::get('power_management', 'Power_ManagementController@index')->name('power_management.index');
	Route::get('power_management/index', 'Power_ManagementController@index')->name('power_management.index');
	Route::get('power_management/index/{filter?}/{filtervalue?}', 'Power_ManagementController@index')->name('power_management.index');	
	Route::get('power_management/view/{rec_id}', 'Power_ManagementController@view')->name('power_management.view');	
	Route::get('power_management/add', 'Power_ManagementController@add')->name('power_management.add');
	Route::post('power_management/store', 'Power_ManagementController@store')->name('power_management.store');
		
	Route::any('power_management/edit/{rec_id}', 'Power_ManagementController@edit')->name('power_management.edit');	
	Route::get('power_management/delete/{rec_id}', 'Power_ManagementController@delete');

/* routes for Permissions Controller */	
	Route::get('permissions', 'PermissionsController@index')->name('permissions.index');
	Route::get('permissions/index', 'PermissionsController@index')->name('permissions.index');
	Route::get('permissions/index/{filter?}/{filtervalue?}', 'PermissionsController@index')->name('permissions.index');	
	Route::get('permissions/view/{rec_id}', 'PermissionsController@view')->name('permissions.view');	
	Route::get('permissions/add', 'PermissionsController@add')->name('permissions.add');
	Route::post('permissions/store', 'PermissionsController@store')->name('permissions.store');
		
	Route::any('permissions/edit/{rec_id}', 'PermissionsController@edit')->name('permissions.edit');	
	Route::get('permissions/delete/{rec_id}', 'PermissionsController@delete');

/* routes for Install_Controlpanel Controller */	
	Route::get('install_controlpanel', 'Install_ControlpanelController@index')->name('install_controlpanel.index');
	Route::get('install_controlpanel/index', 'Install_ControlpanelController@index')->name('install_controlpanel.index');
	Route::get('install_controlpanel/index/{filter?}/{filtervalue?}', 'Install_ControlpanelController@index')->name('install_controlpanel.index');	
	Route::get('install_controlpanel/view/{rec_id}', 'Install_ControlpanelController@view')->name('install_controlpanel.view');	
	Route::get('install_controlpanel/add', 'Install_ControlpanelController@add')->name('install_controlpanel.add');
	Route::post('install_controlpanel/store', 'Install_ControlpanelController@store')->name('install_controlpanel.store');
		
	Route::any('install_controlpanel/edit/{rec_id}', 'Install_ControlpanelController@edit')->name('install_controlpanel.edit');	
	Route::get('install_controlpanel/delete/{rec_id}', 'Install_ControlpanelController@delete');

/* routes for District Controller */	
	Route::get('district', 'DistrictController@index')->name('district.index');
	Route::get('district/index', 'DistrictController@index')->name('district.index');
	Route::get('district/index/{filter?}/{filtervalue?}', 'DistrictController@index')->name('district.index');	
	Route::get('district/view/{rec_id}', 'DistrictController@view')->name('district.view');	
	Route::get('district/add', 'DistrictController@add')->name('district.add');
	Route::post('district/store', 'DistrictController@store')->name('district.store');
		
	Route::any('district/edit/{rec_id}', 'DistrictController@edit')->name('district.edit');	
	Route::get('district/delete/{rec_id}', 'DistrictController@delete');

/* routes for City Controller */	
	Route::get('city', 'CityController@index')->name('city.index');
	Route::get('city/index', 'CityController@index')->name('city.index');
	Route::get('city/index/{filter?}/{filtervalue?}', 'CityController@index')->name('city.index');	
	Route::get('city/view/{rec_id}', 'CityController@view')->name('city.view');	
	Route::get('city/add', 'CityController@add')->name('city.add');
	Route::post('city/store', 'CityController@store')->name('city.store');
		
	Route::any('city/edit/{rec_id}', 'CityController@edit')->name('city.edit');	
	Route::get('city/delete/{rec_id}', 'CityController@delete');

/* routes for Users Controller */	
	Route::get('users', 'UsersController@index')->name('users.index');
	Route::get('users/index', 'UsersController@index')->name('users.index');
	Route::get('users/index/{filter?}/{filtervalue?}', 'UsersController@index')->name('users.index');	
	Route::get('users/view/{rec_id}', 'UsersController@view')->name('users.view');	
	Route::get('users/add', 'UsersController@add')->name('users.add');
	Route::post('users/store', 'UsersController@store')->name('users.store');
		
	Route::any('users/edit/{rec_id}', 'UsersController@edit')->name('users.edit');	
	Route::get('users/delete/{rec_id}', 'UsersController@delete');

/* routes for Templates Controller */	
	Route::get('templates', 'TemplatesController@index')->name('templates.index');
	Route::get('templates/index', 'TemplatesController@index')->name('templates.index');
	Route::get('templates/index/{filter?}/{filtervalue?}', 'TemplatesController@index')->name('templates.index');	
	Route::get('templates/view/{rec_id}', 'TemplatesController@view')->name('templates.view');	
	Route::get('templates/add', 'TemplatesController@add')->name('templates.add');
	Route::post('templates/store', 'TemplatesController@store')->name('templates.store');
		
	Route::any('templates/edit/{rec_id}', 'TemplatesController@edit')->name('templates.edit');	
	Route::get('templates/delete/{rec_id}', 'TemplatesController@delete');

/* routes for Tasks Controller */	
	Route::get('tasks', 'TasksController@index')->name('tasks.index');
	Route::get('tasks/index', 'TasksController@index')->name('tasks.index');
	Route::get('tasks/index/{filter?}/{filtervalue?}', 'TasksController@index')->name('tasks.index');	
	Route::get('tasks/view/{rec_id}', 'TasksController@view')->name('tasks.view');	
	Route::get('tasks/add', 'TasksController@add')->name('tasks.add');
	Route::post('tasks/store', 'TasksController@store')->name('tasks.store');
		
	Route::any('tasks/edit/{rec_id}', 'TasksController@edit')->name('tasks.edit');	
	Route::get('tasks/delete/{rec_id}', 'TasksController@delete');

/* routes for State Controller */	
	Route::get('state', 'StateController@index')->name('state.index');
	Route::get('state/index', 'StateController@index')->name('state.index');
	Route::get('state/index/{filter?}/{filtervalue?}', 'StateController@index')->name('state.index');	
	Route::get('state/view/{rec_id}', 'StateController@view')->name('state.view');	
	Route::get('state/add', 'StateController@add')->name('state.add');
	Route::post('state/store', 'StateController@store')->name('state.store');
		
	Route::any('state/edit/{rec_id}', 'StateController@edit')->name('state.edit');	
	Route::get('state/delete/{rec_id}', 'StateController@delete');

/* routes for Servers_Details Controller */	
	Route::get('servers_details', 'Servers_DetailsController@index')->name('servers_details.index');
	Route::get('servers_details/index', 'Servers_DetailsController@index')->name('servers_details.index');
	Route::get('servers_details/index/{filter?}/{filtervalue?}', 'Servers_DetailsController@index')->name('servers_details.index');	
	Route::get('servers_details/view/{rec_id}', 'Servers_DetailsController@view')->name('servers_details.view');	
	Route::get('servers_details/add', 'Servers_DetailsController@add')->name('servers_details.add');
	Route::post('servers_details/store', 'Servers_DetailsController@store')->name('servers_details.store');
		
	Route::any('servers_details/edit/{rec_id}', 'Servers_DetailsController@edit')->name('servers_details.edit');	
	Route::get('servers_details/delete/{rec_id}', 'Servers_DetailsController@delete');

/* routes for Server_Commands Controller */	
	Route::get('server_commands', 'Server_CommandsController@index')->name('server_commands.index');
	Route::get('server_commands/index', 'Server_CommandsController@index')->name('server_commands.index');
	Route::get('server_commands/index/{filter?}/{filtervalue?}', 'Server_CommandsController@index')->name('server_commands.index');	
	Route::get('server_commands/view/{rec_id}', 'Server_CommandsController@view')->name('server_commands.view');	
	Route::get('server_commands/add', 'Server_CommandsController@add')->name('server_commands.add');
	Route::post('server_commands/store', 'Server_CommandsController@store')->name('server_commands.store');
		
	Route::any('server_commands/edit/{rec_id}', 'Server_CommandsController@edit')->name('server_commands.edit');	
	Route::get('server_commands/delete/{rec_id}', 'Server_CommandsController@delete');

/* routes for Roles Controller */	
	Route::get('roles', 'RolesController@index')->name('roles.index');
	Route::get('roles/index', 'RolesController@index')->name('roles.index');
	Route::get('roles/index/{filter?}/{filtervalue?}', 'RolesController@index')->name('roles.index');	
	Route::get('roles/view/{rec_id}', 'RolesController@view')->name('roles.view');	
	Route::get('roles/add', 'RolesController@add')->name('roles.add');
	Route::post('roles/store', 'RolesController@store')->name('roles.store');
		
	Route::any('roles/edit/{rec_id}', 'RolesController@edit')->name('roles.edit');	
	Route::get('roles/delete/{rec_id}', 'RolesController@delete');

/* routes for Role_Has_Permissions Controller */

/* routes for Remot_Servers Controller */	
	Route::get('remot_servers', 'Remot_ServersController@index')->name('remot_servers.index');
	Route::get('remot_servers/index', 'Remot_ServersController@index')->name('remot_servers.index');
	Route::get('remot_servers/index/{filter?}/{filtervalue?}', 'Remot_ServersController@index')->name('remot_servers.index');	
	Route::get('remot_servers/view/{rec_id}', 'Remot_ServersController@view')->name('remot_servers.view');	
	Route::get('remot_servers/add', 'Remot_ServersController@add')->name('remot_servers.add');
	Route::post('remot_servers/store', 'Remot_ServersController@store')->name('remot_servers.store');
		
	Route::any('remot_servers/edit/{rec_id}', 'Remot_ServersController@edit')->name('remot_servers.edit');	
	Route::get('remot_servers/delete/{rec_id}', 'Remot_ServersController@delete');

/**
 * All routes which requires auth
 */
Route::middleware(['auth'])->group(function () {
	
	
});

	
Route::get('componentsdata/select_location_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->select_location_option_list($request);
	}
);


Route::post('fileuploader/upload/{fieldname}', 'FileUploaderController@upload');
Route::post('fileuploader/s3upload/{fieldname}', 'FileUploaderController@s3upload');
Route::post('fileuploader/remove_temp_file', 'FileUploaderController@remove_temp_file');


/**
 * All static content routes
 */
Route::get('info/about',  function(){
		return view("pages.info.about");
	}
);
Route::get('info/faq',  function(){
		return view("pages.info.faq");
	}
);

Route::get('info/contact',  function(){
	return view("pages.info.contact");
}
);
Route::get('info/contactsent',  function(){
	return view("pages.info.contactsent");
}
);

Route::post('info/contact',  function(Request $request){
		$request->validate([
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required'
		]);

		$senderName = $request->name;
		$senderEmail = $request->email;
		$message = $request->message;

		$receiverEmail = config("mail.from.address");

		Mail::send(
			'pages.info.contactemail', [
				'name' => $senderName,
				'email' => $senderEmail,
				'comment' => $message
			],
			function ($mail) use ($senderEmail, $receiverEmail) {
				$mail->from($senderEmail);
				$mail->to($receiverEmail)
					->subject('Contact Form');
			}
		);
		return redirect("info/contactsent");
	}
);


Route::get('info/features',  function(){
		return view("pages.info.features");
	}
);
Route::get('info/privacypolicy',  function(){
		return view("pages.info.privacypolicy");
	}
);
Route::get('info/termsandconditions',  function(){
		return view("pages.info.termsandconditions");
	}
);

Route::get('info/changelocale/{locale}', function ($locale) {
	app()->setlocale($locale);
	session()->put('locale', $locale);
    return redirect()->back();
})->name('info.changelocale');