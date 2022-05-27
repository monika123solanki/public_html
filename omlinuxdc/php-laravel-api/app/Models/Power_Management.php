<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Power_Management extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'power_management';
	

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
	protected $fillable = ["bettry","inverter","power_consumes","backup_hours","estimated_bill_month","estimated_cost_per_day","estimated_cost_month"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				bettry LIKE ?  OR 
				inverter LIKE ?  OR 
				power_consumes LIKE ?  OR 
				estimated_bill_month LIKE ?  OR 
				estimated_cost_per_day LIKE ?  OR 
				estimated_cost_month LIKE ? 
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
			"bettry", 
			"inverter", 
			"power_consumes", 
			"backup_hours", 
			"estimated_bill_month", 
			"estimated_cost_per_day", 
			"estimated_cost_month", 
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
			"bettry", 
			"inverter", 
			"power_consumes", 
			"backup_hours", 
			"estimated_bill_month", 
			"estimated_cost_per_day", 
			"estimated_cost_month", 
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
			"bettry", 
			"inverter", 
			"power_consumes", 
			"backup_hours", 
			"estimated_bill_month", 
			"estimated_cost_per_day", 
			"estimated_cost_month", 
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
			"bettry", 
			"inverter", 
			"power_consumes", 
			"backup_hours", 
			"estimated_bill_month", 
			"estimated_cost_per_day", 
			"estimated_cost_month", 
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
			"bettry", 
			"inverter", 
			"power_consumes", 
			"backup_hours", 
			"estimated_bill_month", 
			"estimated_cost_per_day", 
			"estimated_cost_month" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
