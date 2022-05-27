<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Servers_Details extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'servers_details';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'server_name','server_ip','machine_types','isp_providers','backup_provier','internet_cost'
	];
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				server_name LIKE ?  OR 
				server_ip LIKE ?  OR 
				machine_types LIKE ?  OR 
				isp_providers LIKE ?  OR 
				backup_provier LIKE ?  OR 
				internet_cost LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"id",
			"server_name",
			"server_ip",
			"machine_types",
			"isp_providers",
			"backup_provier",
			"internet_cost",
			"created_at",
			"updated_at" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"id",
			"server_name",
			"server_ip",
			"machine_types",
			"isp_providers",
			"backup_provier",
			"internet_cost",
			"created_at",
			"updated_at" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id",
			"server_name",
			"server_ip",
			"machine_types",
			"isp_providers",
			"backup_provier",
			"internet_cost",
			"created_at",
			"updated_at" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id",
			"server_name",
			"server_ip",
			"machine_types",
			"isp_providers",
			"backup_provier",
			"internet_cost",
			"created_at",
			"updated_at" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id",
			"server_name",
			"server_ip",
			"machine_types",
			"isp_providers",
			"backup_provier",
			"internet_cost" 
		];
	}
}
