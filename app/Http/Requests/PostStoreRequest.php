<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
            'title' => 'bail|required|unique:posts|max:255',
            'body'  => 'required|min:5'
        ];
    }

    /**
     * This method add custom messges to validation errors.
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Title is required for a post.',
            'title.unique' => 'This title has already been used, enter another one',
            'body.required' => 'What would a post look like without a body.'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Title',
            'body' => 'Body'
        ];
    }
}
