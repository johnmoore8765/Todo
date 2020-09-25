<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app2.css')}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/app3.css')}}">
  <link rel="stylesheet" href="{{asset('css/new.css')}}">
  <script src="{{ asset('js/app.js') }}" defer></script>
  
 
 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="bg">
    <div class="text-center flex justify-center pt-10">
    <div class="w-2/3 border border-gray-400 rounded p-4">
   
    
         @yield('content')
    
         </div>
    </div>
    </div>
</body>
</html>