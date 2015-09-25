<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoriesRequest;
use App\Http\Controllers\CrudController;

class CategoriesController extends CrudController
{
	protected $model= '\App\Category';
	protected $path= 'categories';

	public function __construct(CategoriesRequest $request)
	{
		
	}
}