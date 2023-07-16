<?php

namespace App\Http\Controllers;
use App\Models\todo;
use Illuminate\Http\Request;

class todosController extends Controller
{

    /* fetch all the todos data ifrom the database
display all of the data in the todos page
    */ 
    public function index(){
       
        return view('todos.home');
    }

    public function scaling(){
        return view('todos.scale');
    }

    public function duets(){
        return view ('todos.duets');
    }
    public function show($todoId){

        return view('todos.show')->with('todo', todo::find($todoId));
        
    }
    public function create() {
        return view('todos.create');
    }
    public function store (){


       $this->validate(request(),[
      'name' => 'required',
      'description' => 'required' 
       ]
       
    ); 
       $data = request()->all();
       $todo = new todo();
       $todo->name = $data ['name'];
       $todo->description = $data ['description'];
       $todo->completed = false;

       $todo->save();
       return redirect('/todos');
    }
}
