<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Remot_Servers extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'remot_servers';
	

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
		'server_name','server_ip','ssh_port','user_name','password','add_servers'
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
				ssh_port LIKE ?  OR 
				user_name LIKE ?  OR 
				password LIKE ?  OR 
				add_servers LIKE ? 
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
			"ssh_port",
			"user_name",
			"created_at",
			"updated_at",
			"add_servers" 
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
			"ssh_port",
			"user_name",
			"created_at",
			"updated_at",
			"add_servers" 
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
			"ssh_port",
			"user_name",
			"created_at",
			"updated_at",
			"add_servers" 
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
			"ssh_port",
			"user_name",
			"created_at",
			"updated_at",
			"add_servers" 
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
			"ssh_port",
			"user_name",
			"add_servers" 
		];
	}
}
