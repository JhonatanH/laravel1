<?php

 namespace App;

 use Illuminate\Database\Eloquent\Model;

 class Product extends Model
 {
	 protected $table = 'products';

	 protected $fillable = ['title', 'body', 'value', 'qtd', 'url'];

	 public function setUrlAttribute($value)
	 {
		if ($value=='')
			$value = $this->attributes['title'];

		 	$this->attributes['url'] = str_slug($value);
	 }
		 /**
	* Relacionamento entre o model Category e o atual (Product)
	*/
	public function categories()
	{
		//este é um relacionamento muitos para muitos
		return $this->belongsToMany('App\Category');
	}
}
