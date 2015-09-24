<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;
use App\Http\Controllers\CrudController;
use Illuminate\Contracts\Validation\Validator;

class ProductsController extends CrudController
{
     protected $model= '\App\Product';
     protected $path= 'products';

   	 public function __construct(ProductsRequest $request)
     {

     }
}