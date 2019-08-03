<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Rules\Uppercase;

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
            'data.first' => [
                function($attribute, $value, $fail){
                    if(strtoupper($value) !== $value){
                        $fail(':attribute should be uppercase.');
                    }
                },
            ],
            'data.second' => new Uppercase,
            'email' => [
                'required',
                'email',
                Rule::unique('users')->where(function ($query){
                    return $query->where('id', 1);
                }),
            ],
            'date' => [
                'required',
                'date',
                'date_equals:today',
            ],
            'checkbox' => 'accepted',
            'password' => [
                'required',
                'confirmed',
                Rule::notIn(['password', 'mypassword']),
            ],
            'image' => [
                'file',
                'image',
                'mimes:png,jpg,jpeg',
                'required',
                Rule::dimensions()->maxWidth(200)->maxHeight(200)->ratio(1.0),
            ],
        ];
    }

    public function withValidator($validator)
    {
        $validator->sometimes(['reason', 'cost'], 'required', function($input){
            return $input->data == 'some';
        });
    }

    public function messages()
    {
        return [
            'password.not_in' => 'Password cannot be :input, chooce a password which is not easily guessable.',
            'data2.unique' => ':input already exists, choose another one.'
        ];
    }

    public function attributes()
    {
        return [
            'data.first' => 'First',
            'data.second' => 'Second'
        ];
    }
}
