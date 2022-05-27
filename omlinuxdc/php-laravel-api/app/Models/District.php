<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class District extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'district';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'districtid';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["district_title","state_id","district_description","district_status"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				district_title LIKE ?  OR 
				district_description LIKE ?  OR 
				district_status LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"districtid", 
			"district_title", 
			"state_id", 
			"district_description", 
			"district_status" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"districtid", 
			"district_title", 
			"state_id", 
			"district_description", 
			"district_status" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"districtid", 
			"district_title", 
			"state_id", 
			"district_description", 
			"district_status" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"districtid", 
			"district_title", 
			"state_id", 
			"district_description", 
			"district_status" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"districtid", 
			"district_title", 
			"state_id", 
			"district_description", 
			"district_status" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
