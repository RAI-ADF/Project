<?php

namespace TubesRAI\Http\Requests;

use TubesRAI\Http\Requests\Request;

class SuperAdminRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return (auth()->check() and auth()->user()->hak_akses == 0);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
