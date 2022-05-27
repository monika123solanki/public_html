<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Power_ManagementEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
		
        return [
            
				"bettry" => "filled|string",
				"inverter" => "filled|string",
				"power_consumes" => "filled|string",
				"backup_hours" => "filled",
				"estimated_bill_month" => "filled|string",
				"estimated_cost_per_day" => "filled|string",
				"estimated_cost_month" => "filled|string",
            
        ];
    }

	public function messages()
    {
        return [
			
            //using laravel default validation messages
        ];
    }

    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            //eg = 'name' => 'trim|capitalize|escape'
        ];
    }
}
