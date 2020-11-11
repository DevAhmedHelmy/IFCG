<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class HygieneInspectionRequest extends FormRequest
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
            'employee_id' => ['required','exists:employees,id'],
            'flu' => ['required',Rule::in([0, 3,5])],
            'diarrhea' => ['required',Rule::in([0, 3,5])],
            'beard' => ['required',Rule::in([0, 3,5])],
            'uniform' => ['required',Rule::in([0, 3,5])],
            'hairnet' => ['required',Rule::in([0, 3,5])],
            'shoes' => ['required',Rule::in([0, 3,5])],
            'gloves' => ['required',Rule::in([0, 3,5])],
            'pins' => ['required',Rule::in([0, 3,5])],
            'cleanness' => ['required',Rule::in([0, 3,5])],
            'wounds' => ['required',Rule::in([0, 3,5])],
            'nails' => ['required',Rule::in([0, 3,5])],
            'mask' => ['required',Rule::in([0, 3,5])],
            'accessories' => ['required',Rule::in([0, 3,5])],
            'eating' => ['required',Rule::in([0, 3,5])],
            'rosacea' => ['required',Rule::in([1, 2,3])],
            'shift' => ['required',Rule::in([1, 2])],
            'area' => ['required','string','max:255'],
            'notes' => ['required','string'],
            'corrective_action' => ['required','string'],
        ];
    }
}
