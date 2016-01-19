<?php

namespace Socmednet\Http\Requests;

use Socmednet\Http\Requests\Request;

class RolePostRequest extends Request
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
            'code' => 'sometimes|required|max:20|unique:roles',
            'name' => 'required|max:255'
        ];
    }
}
