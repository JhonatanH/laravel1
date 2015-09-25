<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table= 'categories';
	protected $fillable= ['title'];

// 	/**
// 	* Relacionamento entre o model Category e o atual (Product)
// 	*/
// 	public function products()
// 	{
// 		//este é um relacionamento muitos para muitos
// 		return $this->belongsToMany('App\Product');
// 	}
 }