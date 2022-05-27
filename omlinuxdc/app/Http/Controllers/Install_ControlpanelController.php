<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Install_ControlpanelAddRequest;
use App\Http\Requests\Install_ControlpanelEditRequest;
use App\Models\Install_Controlpanel;
use Illuminate\Http\Request;
use Exception;
class Install_ControlpanelController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$view = "pages.install_controlpanel.list";
		$query = Install_Controlpanel::query();
		$limit = $request->limit ?? 10;
		if($request->search){
			$search = trim($request->search);
			Install_Controlpanel::search($query, $search); // search table records
		}
		$orderby = $request->orderby ?? "install_controlpanel.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a table field
		}
		$records = $query->paginate($limit, Install_Controlpanel::listFields());
		return $this->renderView($view, compact("records"));
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Install_Controlpanel::query();
		$record = $query->findOrFail($rec_id, Install_Controlpanel::viewFields());
		return $this->renderView("pages.install_controlpanel.view", ["data" => $record]);
	}
	

	/**
     * Display form page
     * @return \Illuminate\View\View
     */
	function add(){
		return $this->renderView("pages.install_controlpanel.add");
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function store(Install_ControlpanelAddRequest $request){
		$modeldata = $this->normalizeFormData($request->validated());
		
		//save Install_Controlpanel record
		$record = Install_Controlpanel::create($modeldata);
		$rec_id = $record->id;
		return $this->redirect("install_controlpanel", __('record_added_successfully'));
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(Install_ControlpanelEditRequest $request, $rec_id = null){
		$query = Install_Controlpanel::query();
		$record = $query->findOrFail($rec_id, Install_Controlpanel::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $this->normalizeFormData($request->validated());
			$record->update($modeldata);
			return $this->redirect("install_controlpanel", __('record_updated_successfully'));
		}
		return $this->renderView("pages.install_controlpanel.edit", ["data" => $record, "rec_id" => $rec_id]);
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
		$query = Install_Controlpanel::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		$redirectUrl = $request->redirect ?? url()->previous();
		return $this->redirect($redirectUrl, __('record_deleted_successfully'));
	}
}
