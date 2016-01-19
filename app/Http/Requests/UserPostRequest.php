<?php

namespace Socmednet\Http\Requests;

use Socmednet\Http\Requests\Request;

class UserPostRequest extends Request
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
            'name' => 'required|alpha|max:255',
            'email' => 'sometimes|required|email|max:255|unique:users',
            'password' => 'sometimes|confirmed|min:6',
            'active' => 'boolean'
        ];
    }
}
