@extends('todos.layout')

@section('content')
<h1 class="text-2x1">What next you need To-Do</h1>
         <x-alert />
         <form method="post" action="{{route('todo.store')}}" class="py-5">
             @csrf
             <div class="py-1">
             <input type="text" name="title" class="py-3 px-2 border rounded" placeholder="title"/>
             </div>
             <div class="py-1">
             <textarea name="description" class="p-2 rounded border" 
             placeholder="description"></textarea>
             </div>
             <div class="py-1">
             <input type="submit" value="Create" class="p-2 border rounded" />
             </div>
         
         </form>

         <a href="{{route('todo.index')}}" class="m-5 py-1 px-1 bg-purple-400 
         cursor-pointer rounded boarder">Back</a>
@endsection