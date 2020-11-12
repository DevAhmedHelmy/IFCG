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
            'flu' => ['required',Rule::in([0, 3,6])],
            'diarrhea' => ['required',Rule::in([0, 3,6])],
            'beard' => ['required',Rule::in([0, 3,6])],
            'uniform' => ['required',Rule::in([0, 3,6])],
            'hairnet' => ['required',Rule::in([0, 3,6])],
            'shoes' => ['required',Rule::in([0, 3,6])],
            'gloves' => ['required',Rule::in([0, 3,6])],
            'pins' => ['required',Rule::in([0, 3,6])],
            'cleanness' => ['required',Rule::in([0, 3,6])],
            'wounds' => ['required',Rule::in([0, 3,6])],
            'nails' => ['required',Rule::in([0, 3,6])],
            'mask' => ['required',Rule::in([0, 3,6])],
            'accessories' => ['required',Rule::in([0, 3,6])],
            'eating' => ['required',Rule::in([0, 3,6])],
            'rosacea' => ['required',Rule::in([1, 2,3])],
            'shift' => ['required',Rule::in([1, 2])],
            'area' => ['required',Rule::in(['production', 'fill','stores'])],
            'notes' => ['required','string'],
            'corrective_action' => ['required','string'],
        ];
    }
}
