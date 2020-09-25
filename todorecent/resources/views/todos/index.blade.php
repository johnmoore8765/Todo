


@extends('todos.layout')

@section('content')

<div class="bg">
<div class="flex justify-center">
<!-- <button onclick="window.print()">Print this page</button> -->
<div class="py-1">
<a href="{{route('print')}}" class="bg-blue-400 rounded text-white">Print</a>
</div>
<div class="mx-2 py-1"> 

<a href='/home'>Homepage</a>
</div>
<div>
         <h1 class="text-2x1 text-red-800">All your To-Do</h1>
</div>
 
       <div>
       <div class="py-3 flex justify-center">
         <a href="{{route('todo.create')}}" class="mx-5 py-1 px-1 margintop-1 bg-blue-400 
         cursor-pointer rounded text-white">Create New</a>
         </div>
         </div>
           <div class="flex justify-right"> 
               <nav class="navbar navbar-light bg-light justify-content-between">
               <form class="form-inline" type="get" action="{{ url('/search') }}">
               <div class="flex justify-right">
               <input class="form-control mr-sm-2" type="search" placeholder="Search Todo" aria-label="Search">
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
               </div>
               </form>
            
               </nav>
            </div> 

</div>


         <ul class="my-5">
         <x-alert />


@forelse($todos as $todo)

<li class="flex justify-between py-2">
<div>
@include('todos.completebutton')
</div>
    @if($todo->completed)
    <div class="bg-green-500 rounded mx-5 py-1 px-1">
    <p>{{$todo->title}}</p>
    </div>
    @else
    <div class="bg-red-500 rounded mx-5 py-1 px-1">
    <a class="cursor-pointer text-black" href="{{route('todo.show',$todo->id)}}">{{$todo->title}}</a>
</div>
    @endif
    <div>
     <a href="{{route('todo.edit', $todo->id)}}" class="mx-5 py-1 px-1
         cursor-pointer rounded boarder">
         <span class="fas fa-edit text-black px-2" /></a>

     
         <span class="fas fa-trash text-blue-400 px-2 cursor-pointer " onclick="event.preventDefault();
              if(confirm('Do you really want to delete?')){
               document.getElementById('form-delete-{{$todo->id}}').submit()}" />

         <form style="display.none" id="{{'form-delete-'.$todo->id}}" method="post" 
      action="{{route('todo.destroy', $todo->id)}}">
      @csrf
      @method('delete')
      </form>
     
    </div>

 </li>   
 @empty

         <p>No task available, Create one </p>
         

 @endforelse

</ul>
    
</div>   
@endsection
