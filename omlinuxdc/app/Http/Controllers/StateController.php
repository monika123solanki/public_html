<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\StateAddRequest;
use App\Http\Requests\StateEditRequest;
use App\Models\State;
use Illuminate\Http\Request;
use Exception;
class StateController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.state.list";
		$query = State::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			State::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "state.state_id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, State::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = State::query();
		$record = $query->findOrFail($rec_id, State::viewFields());
		return $this->renderView("pages.state.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.state.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(StateAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save State record
		$record = State::create($modeldata);
		$rec_id = $record->state_id;
		return $this->redirect("state", __('record_added_successfully'));
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(StateEditRequest $request, $rec_id = null){
		$query = State::query();
		$record = $query->findOrFail($rec_id, State::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("state", __('record_updated_successfully'));
		}
		return $this->renderView("pages.state.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = State::query();
		$query->whereIn("state_id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, __('record_deleted_successfully'));
	}
}
