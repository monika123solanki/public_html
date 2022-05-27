<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Power_ManagementAddRequest;
use App\Http\Requests\Power_ManagementEditRequest;
use App\Models\Power_Management;
use Illuminate\Http\Request;
use Exception;
class Power_ManagementController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.power_management.list";
		$query = Power_Management::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Power_Management::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "power_management.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Power_Management::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Power_Management::query();
		$record = $query->findOrFail($rec_id, Power_Management::viewFields());
		return $this->renderView("pages.power_management.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.power_management.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(Power_ManagementAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Power_Management record
		$record = Power_Management::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("power_management", __('record_added_successfully'));
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(Power_ManagementEditRequest $request, $rec_id = null){
		$query = Power_Management::query();
		$record = $query->findOrFail($rec_id, Power_Management::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("power_management", __('record_updated_successfully'));
		}
		return $this->renderView("pages.power_management.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Power_Management::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, __('record_deleted_successfully'));
	}
}
