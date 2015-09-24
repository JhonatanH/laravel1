<?php

namespace App\Http\Requests;

use App\Http\Requests\AbstractRequest;

class ProductsRequest extends AbstractRequest
{
   protected $rules = [
                        'title'=>'required|min:3',
                        'body'=>'required|min:10',
                        'value'=>'required|numeric',
                        'qtd'=>'required|numeric'
                      ];
}
