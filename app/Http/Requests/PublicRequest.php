<?php

namespace App\Http\Requests;

use App\Models\PublicAdministration;
use Illuminate\Foundation\Http\FormRequest;

class PublicRequest extends FormRequest
{
    public function authorize()
    {
        return true;

    }
    public function rules()
    {
        return [

            'title' => ['required'],
             'user_id' => ['required'],
        ];

    }
}
