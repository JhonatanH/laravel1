<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UsersRequest;
use App\Http\Controllers\CrudController;

class UsersController extends CrudController
{
     protected $model = '\App\User';
     protected $path = 'users';

     public function __construct(UsersRequest $request)
     {

     }
}