<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Users extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'users';
	

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
	protected $fillable = ["first_name","last_name","profile_picture","email","special_instruction","mobile_number","state_id","role_id","city_id"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				first_name LIKE ?  OR 
				last_name LIKE ?  OR 
				email LIKE ?  OR 
				special_instruction LIKE ?  OR 
				mobile_number LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"first_name", 
			"last_name", 
			"profile_picture", 
			"email", 
			"special_instruction", 
			"mobile_number", 
			"state_id", 
			"role_id", 
			"city_id", 
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
			"first_name", 
			"last_name", 
			"profile_picture", 
			"email", 
			"special_instruction", 
			"mobile_number", 
			"state_id", 
			"role_id", 
			"city_id", 
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
			"first_name", 
			"last_name", 
			"profile_picture", 
			"email", 
			"special_instruction", 
			"mobile_number", 
			"state_id", 
			"role_id", 
			"city_id", 
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
			"first_name", 
			"last_name", 
			"profile_picture", 
			"email", 
			"special_instruction", 
			"mobile_number", 
			"state_id", 
			"role_id", 
			"city_id", 
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
			"first_name", 
			"last_name", 
			"profile_picture", 
			"email", 
			"special_instruction", 
			"mobile_number", 
			"state_id", 
			"role_id", 
			"city_id" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
