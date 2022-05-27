<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Power_ManagementAddRequest extends FormRequest
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
            
				"bettry" => "required|string",
				"inverter" => "required|string",
				"power_consumes" => "required|string",
				"backup_hours" => "required",
				"estimated_bill_month" => "required|string",
				"estimated_cost_per_day" => "required|string",
				"estimated_cost_month" => "required|string",
            
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
