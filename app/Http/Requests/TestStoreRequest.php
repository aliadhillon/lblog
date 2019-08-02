<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

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
    public function rules(Request $request)
    {
        return [
            'data' => 'required|different:data2|gte:data2',
            'data2' => 'required',
            'email' => [
                'required',
                'email',
                Rule::in(['ali@test.com', 'ali@test.org', 'ali@test.pk']),
            ],
            'date' => 'required|date|date_equals:today',
            'checkbox' => 'accepted|boolean',
            'password' => [
                'required',
                'confirmed',
                Rule::notIn(['password', 'mypassword']),
            ],
            'image' => [
                'file',
                'image',
                'mimes:png,jpg',
                'required',
                Rule::dimensions()->maxWidth(200)->maxHeight(200)->ratio(1.0),
            ],
        ];
    }

    public function messages()
    {
        return [
            'password.not_in' => 'Password cannot be :input, chooce a password which is not easily guessable.'
        ];
    }
}
