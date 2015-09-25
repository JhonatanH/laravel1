<?php

 namespace App;

 use Illuminate\Auth\Authenticatable;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Auth\Passwords\CanResetPassword;
 use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
 use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

 class User extends Model implements AuthenticatableContract, CanResetPasswordContract
 {

 use Authenticatable, CanResetPassword;

 protected $table = 'users';

 protected $fillable = ['name', 'email', 'password'];

     public function setPasswordAttribute($value)
         {
             if ($value=='')
                 unset($this->attributes['password']);
             else
                 $this->attributes['password'] = bcrypt($value);
         }

	public function profile()
	{
		return $this->hasOne('App\Profile');
	}

	public function images()
	{
		return $this->hasMany('App\Image');
	}



 }