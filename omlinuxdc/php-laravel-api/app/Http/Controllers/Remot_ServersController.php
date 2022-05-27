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
		$query = Remot_Servers::query();
		if($request->search){
			$search = trim($request->search);
			Remot_Servers::search($query, $search);
		}
		$orderby = $request->orderby ?? "remot_servers.id";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Remot_Servers::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Remot_Servers::query();
		$record = $query->findOrFail($rec_id, Remot_Servers::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(Remot_ServersAddRequest $request){
		$modeldata = $request->validated();
		$modeldata['password'] = bcrypt($modeldata['password']);
		
		//save Remot_Servers record
		$record = Remot_Servers::create($modeldata);
		$rec_id = $record->id;
		return $this->respond($record);
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
		$query = Remot_Servers::query();
		$query->whereIn("id", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
