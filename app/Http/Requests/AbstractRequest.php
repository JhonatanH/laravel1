<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

abstract class AbstractRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if ($this->isMethod('post') or $this->isMethod('put'))
            return $this->rules;
        return [];
    }

    public function messages()
    {
        return [
                    'required'=>':attribute não deve ficar vazio.',
                    'title.required'=>'O título é obrigatório.',
                    'min'=>':attribute deve ter mais de :min caracteres.',
                    'numeric'=>':attribute deve ser um número.'
                ];
    }
}
