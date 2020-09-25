@extends('todos.layout')

@section('content')
<h1 class="text-2x1">Update this todo list</h1>
<h2></h2>
         <x-alert />
         <form method="post" action="{{route('todo.update',$todo->id)}}"class="py-5">
             @csrf
             @method('patch')
             <div class="py-1">
             <input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 border rounded"/>
             </div>

             <div class="py-1">
             <textarea name="description" class="p-2 rounded border" 
             placeholder="description">{{$todo->description}}</textarea>
             </div>

             <div class="py-1">
             <input type="submit" value="Update" class="p-2 border rounded" />
             </div>

         </form>

         <a href="{{route('todo.index')}}" class="m-5 py-1 px-1 bg-purple-400 
         cursor-pointer rounded boarder">Back</a>
         
@endsection
