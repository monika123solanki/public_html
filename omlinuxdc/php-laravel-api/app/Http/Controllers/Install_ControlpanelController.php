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
		$query = Install_Controlpanel::query();
		if($request->search){
			$search = trim($request->search);
			Install_Controlpanel::search($query, $search);
		}
		$orderby = $request->orderby ?? "install_controlpanel.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Install_Controlpanel::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Install_Controlpanel::query();
		$record = $query->findOrFail($rec_id, Install_Controlpanel::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(Install_ControlpanelAddRequest $request){
		$modeldata = $request->validated();
		
		//save Install_Controlpanel record
		$record = Install_Controlpanel::create($modeldata);
		$rec_id = $record->id;
		return $this->respond($record);
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
			$modeldata = $request->validated();
			$record->update($modeldata);
		}
		return $this->respond($record);
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
		return $this->respond($arr_id);
	}
}
