<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "login" => "required|min:2|max:30",
            "name" => "required|min:2|max:30",
            "last_name" => "required|min:2|max:30",
            "email" => "required|min:5|max:50|email:rfc,dns",
            "password" => "required|min:8|max:50",
            'role' => 'required|integer'
        ];
    }

    public function messages() {
        return [
            "login.required" => "the field must be filled in",
            "login.min" => "this field must contain more than two characters",
            "login.max" => "this field should contain no more than thirty characters",
            "name.required" => "the field must be filled in",
            "name.min" => "this field must contain more than two characters",
            "name.max" => "this field should contain no more than thirty characters",
            "last_name.required" => "the field must be filled in",
            "last_name.min" => "this field must contain more than two characters",
            "last_name.max" => "this field should contain no more than thirty characters",
            "email.required" => "the field must be filled in",
            "email.min" => "this field must contain more than five characters",
            "email.max" => "this field should contain no more than fifty characters",
            "email.email" => "this field should be an email",
            "password.required" => "the field must be filled in",
            "password.min" => "this field must contain more than eight characters",
            "password.max" => "this field should contain no more than fifty characters",
            "role.required" => "the field must be filled in",
            "role.integer" => "choose a role"
        ];
    }
}
