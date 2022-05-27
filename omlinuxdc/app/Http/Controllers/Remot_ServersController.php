<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Remot_ServersAddRequest;
use App\Http\Requests\Remot_ServersEditRequest;
use App\Models\Remot_Servers;
use Illuminate\Http\Request;
use Exception;
class Remot_ServersController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.remot_servers.list";
		$query = Remot_Servers::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Remot_Servers::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "remot_servers.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Remot_Servers::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Remot_Servers::query();
		$record = $query->findOrFail($rec_id, Remot_Servers::viewFields());
		return $this->renderView("pages.remot_servers.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.remot_servers.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(Remot_ServersAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		$modeldata['password'] = bcrypt($modeldata['password']);
		
		//save Remot_Servers record
		$record = Remot_Servers::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("remot_servers", __('record_added_successfully'));
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(Remot_ServersEditRequest $request, $rec_id = null){
		$query = Remot_Servers::query();
		$record = $query->findOrFail($rec_id, Remot_Servers::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("remot_servers", __('record_updated_successfully'));
		}
		return $this->renderView("pages.remot_servers.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Remot_Servers::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, __('record_deleted_successfully'));
	}
}
