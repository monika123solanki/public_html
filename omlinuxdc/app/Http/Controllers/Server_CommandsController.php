<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Server_CommandsAddRequest;
use App\Http\Requests\Server_CommandsEditRequest;
use App\Models\Server_Commands;
use Illuminate\Http\Request;
use Exception;
class Server_CommandsController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.server_commands.list";
		$query = Server_Commands::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Server_Commands::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "server_commands.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Server_Commands::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Server_Commands::query();
		$record = $query->findOrFail($rec_id, Server_Commands::viewFields());
		return $this->renderView("pages.server_commands.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.server_commands.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(Server_CommandsAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Server_Commands record
		$record = Server_Commands::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("server_commands", __('record_added_successfully'));
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(Server_CommandsEditRequest $request, $rec_id = null){
		$query = Server_Commands::query();
		$record = $query->findOrFail($rec_id, Server_Commands::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("server_commands", __('record_updated_successfully'));
		}
		return $this->renderView("pages.server_commands.edit", ["data" => $record, "rec_id" => $rec_id]);
	}
	

	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
	 * @param  \Illuminate\Http\Request
	 * @param string $rec_id //can be separated by comma 
     * @return \Illuminate\Http\Response
     */
	function delete(Request $request, $rec_id = null){
		$arr_id = explode(",", $rec_id);
		$query = Server_Commands::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, __('record_deleted_successfully'));
	}
}
