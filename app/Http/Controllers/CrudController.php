<?php namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use App\Http\Requests\ProductsRequest;
 use App\Http\Controllers\Controller;
 use App\User;

 abstract class CrudController extends Controller
 {

 protected $model_instance;
 protected $rules= [];

     public function index()
     {
         $data = $this->getModel()->all();
         return view ($this->path.'.index', ['data'=>$data]);
     }

     public function create()
     {
        return view ($this->path.'.create');
     }

     public function store(Request $request)
     {       
         $this->getModel()->create($request->all());
         return redirect()->route('admin.'.$this->path.'.index');
     }

     public function show($id)
     {
         $data = $this->getModel()->find($id);
         return view ($this->path.'.show', ['data'=>$data]);
     }

    public function edit($id)
     {
     $data = $this->getModel()->find($id);
     return view ($this->path.'.edit', ['data'=>$data]);
     }

    public function update(Request $request, $id)
     {
         $data = $this->getModel()->find($id);
         $data->update($request->all());
        return redirect()->route('admin.'.$this->path.'.index');
     }

     public function destroy($id)
     {
         $data = $this->getModel()->find($id);
         $data->delete();
        return redirect()->route('admin.'.$this->path.'.index');
     }

         protected function getModel()
         {
             if ($this->model_instance === null)
             $this->model_instance = new $this->model;

             return $this->model_instance;
         }
 }