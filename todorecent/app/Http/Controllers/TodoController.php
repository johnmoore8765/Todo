<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Validator;
use App\Http\Requests\TodoCreateRequest;
class TodoController extends Controller
{
    public function index()
    {
        $todos = auth()->user()->todos->sortBy('completed');
        
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function show(Todo $todo)
    {
      return view('todos.show', compact('todo'));
    }

    public function store(TodoCreateRequest $request)
    {        
        $userId= auth()->id();
        $request['user_id'] = $userId;
        auth()->user()->todos()->create($request->all());
        return redirect(route('todo.index'))->with('message', 'Todo Created Successfully');
    }

    public function edit(Todo $todo)
    {
        //dd($todo->title);
       // $todo = Todo::find($id);
        return view('todos.edit',compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update(['title'=> $request->title]);
        return redirect(route('todo.index'))->with('message', 'Updated');
        //update todo

    }

    public function complete(Todo $todo)
    {
      $todo->update(['completed' => true]);
      return redirect()->back()->with('message','Task marked as completed');

    }
    public function incomplete(Todo $todo)
    {
      $todo->update(['completed' => false]);
      return redirect()->back()->with('message','Task marked as Incompleted');

    }

    public function destroy(Todo $todo)
    {
      $todo->delete();
      return redirect()->back()->with('message','Task deleted');

    }

    public function uploadForm()
        {
            return view('upload');
        }

    public function uploadFile(Request $req)
        {

          $this->Validate($req, [
            'files.*' => 'required|mimes:jpeg,png,jpg,pdf,dox|max:1024000'
          ]);
         
            

          if($req->hasfile('files'))
          {
            $fileArray = [];
            foreach ($req->file('files') as $file)
            {
              
              $fileName = $file->getClientOriginalName();
              $fileArray[] = $fileName;

              $file->move(public_path('files'), $fileName);
            }


          }
        
        return redirect()->back()->with('message','File has been uploaded successfully');
        }

    public function search(Request $request)
    {
      $this->Validate($request, [
        'query' => 'required|min:3'
      ]);
      $search_text = $_GET['query'];
      $todos = todo::where('title', 'LIKE', '%'.$search_text. '%');
      // return view('todo.index', compact('todo'));
    }


    public function print(Todo $todo){

      $todo = auth()->user()->todos->all();
      return view('todos.print',compact('todo'));
    }
}
