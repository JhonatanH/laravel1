<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

abstract class AbstractRequest extends Request
{

    protected $actionsToValidate = ['store', 'update'];

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if (($this->isMethod('post') or $this->isMethod('put')) and $this->checkAction()){
            return $this->rules;
        }
        return [];
    }

    public function messages()
    {
        return [
                    'required'=>':attribute não deve ficar vazio.',
                    'title.required'=>'O título é obrigatório.',
                    'min'=>':attribute deve ter mais de :min caracteres.',
                    'numeric'=>':attribute deve ser um número.',
                    'email' => ':attribute deve ser um email válido.'
                ];
    }

    protected function checkAction()
    {
        if (empty($this->route()->getAction()['as']))
            return false;

        $base= explode('.',$this->route()->getAction()['as']);

        if(empty($base[1]))
            return false;

        return in_array($base[1], $this->actionsToValidate);
    }
}
