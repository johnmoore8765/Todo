<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($todo as $key => $todo)
              <tr>
                  <td>{{$todo->id}}</td>
                  <td>{{$todo->title}}</td>
                  <td>{{$todo->description}}</td>
                  
              </tr>
              @endforeach
        </tbody>
    </table>
    <!-- <button onclick="window.print()">Print this page</button> -->
</body>
</html>