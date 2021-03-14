<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sellsRequest extends FormRequest
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
            'ref' => ['required', 'numeric'],
            'fecha' => ['required', 'date'],
            'cantidad' => ['required', 'numeric'],
            'impPagado' => ['required', 'numeric'],
            'impDebe' => ['required', 'numeric'],
            'producto' => ['required', 'string']
        ];
    }
}
