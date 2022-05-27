<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Servers_DetailsAddRequest;
use App\Http\Requests\Servers_DetailsEditRequest;
use App\Models\Servers_Details;
use Illuminate\Http\Request;
use Exception;
class Servers_DetailsController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.servers_details.list";
		$query = Servers_Details::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Servers_Details::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "servers_details.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Servers_Details::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Servers_Details::query();
		$record = $query->findOrFail($rec_id, Servers_Details::viewFields());
		return $this->renderView("pages.servers_details.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.servers_details.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(Servers_DetailsAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Servers_Details record
		$record = Servers_Details::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("servers_details", __('record_added_successfully'));
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(Servers_DetailsEditRequest $request, $rec_id = null){
		$query = Servers_Details::query();
		$record = $query->findOrFail($rec_id, Servers_Details::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("servers_details", __('record_updated_successfully'));
		}
		return $this->renderView("pages.servers_details.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Servers_Details::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, __('record_deleted_successfully'));
	}
}
