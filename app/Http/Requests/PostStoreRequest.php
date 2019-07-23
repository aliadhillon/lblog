<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Lang;

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
            'body'  => 'required'
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
            'required' => ':attribute is required to create a post',
            'unique' => 'A post with the :attribute ":input" already exitsts, enter another one',
            'min' => ':attribute should be minimum :min characters long',
            'max' => 'Maximum characters limit for :attribute is :max'
        ];
    }

    /**
     * Get the custom attribute names.
     * @return array
     */
    public function attributes()
    {
        return [
            'title' => 'Title',
            'body' => 'Body'
        ];
    }
}