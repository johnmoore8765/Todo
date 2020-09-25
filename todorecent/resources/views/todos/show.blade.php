@extends('todos.layout')

@section('content')

<div class="py-2">
<h1 class="text-2x1">{{$todo->title}}</h1>
</div>  
 



         <div>
             <div>
                 <p>{{$todo->description}}</p>
             </div>
         </div>


         
         <a href="{{route('todo.index')}}" class="m-5 py-1 px-1 bg-purple-400 
         cursor-pointer rounded boarder">Back</a>
         
@endsection