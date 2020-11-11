<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class EmployeeRequest extends FormRequest
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
            'name'     => ['required','string','max:255'],
            'code'    => $this->isMethod('post') ? ['required','unique:employees'] :['required',Rule::unique('employees')->ignore($this->employee->id)],
            'gender' => ['required',Rule::in(['male', 'female'])],
        ];
    }
}
