<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TestStoreRequest extends FormRequest
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
            'data' => 'required|different:data2|gte:data2',
            'data2' => 'filled|ip',
            'email' => [
                'required',
                'email',
                Rule::in(['ali@test.com', 'ali@test.org', 'ali@test.pk']),
            ],
            'date' => 'required|date|date_equals:today',
            'checkbox' => 'accepted|boolean',
            'password' => 'required|confirmed',
            'image' => [
                'file',
                'image',
                'required',
                Rule::dimensions()->maxWidth(200)->maxHeight(200)->ratio(1.0),
            ],
        ];
    }
}
