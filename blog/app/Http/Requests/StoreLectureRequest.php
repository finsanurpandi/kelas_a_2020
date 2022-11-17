<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Titlecase;
use App\Rules\Usercheck;

class StoreLectureRequest extends FormRequest
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
            'nidn' => ['required',
                        'min:10',
                        'numeric',
                        new Usercheck
        ],
            'nama' => ['required', 
                        'min:5',
                        new Titlecase]
        ];
    }
}
