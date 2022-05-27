<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Servers_DetailsEditRequest extends FormRequest
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
            
				"server_name" => "filled|string",
				"server_ip" => "filled|string",
				"machine_types" => "filled|string",
				"isp_providers" => "filled|string",
				"backup_provier" => "filled|string",
				"internet_cost" => "filled|string",
            
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
