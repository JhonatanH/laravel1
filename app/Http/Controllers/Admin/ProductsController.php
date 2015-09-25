<?php  

namespace App\Http\Controllers\Admin;

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

     public function categories(Request $request, $id)
     {
          $product = \App\Product::find($id);

          if ($request->isMethod('post')) {
           $product->categories()->sync($request->input('categories'));
               return redirect()->route($this->path.'.categories', ['id'=>$id]);
               }

          $categories = \DB::table('categories')->lists('title', 'id');
          $checked = $product->categories->lists('title','id')->toArray();

          return view (
               $this->path.'.categories',
               ['data'=>$product, 'checked'=>$checked, 'categories'=>$categories]
          );
     }

}