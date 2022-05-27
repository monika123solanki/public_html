<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Remot_ServersAddRequest extends FormRequest
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
            
				"server_name" => "required|string",
				"server_ip" => "required|string",
				"ssh_port" => "required|string",
				"user_name" => "required|string",
				"password" => "required|same:confirm_password",
				"add_servers" => "required|string",
            
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
