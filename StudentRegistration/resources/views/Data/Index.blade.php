
@extends('layout.menu')
    @section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    
</head>
<body>
    <table border=1>
    <tr>
    <td>id</td>
    <td>title</td>
    <td>Body</td>
    <td>Edit</td>
    <td>Delete</td>
    </tr>
    @foreach ($dbdata as $a)
    <tr>
        <td>{{$a->id}}</td>
        <td>{{$a->title}}</td>
        <td>{{$a->body}}</td>
        <td><a href="{{ route('test.edit',$a->id)}}" >EDIT</a>
        <td> <form method="post" action="{{route('test.destroy',$a->id)}}">
        @csrf 
        @method('DELETE')
        <Button type="submit" name="delete" value="delete">DELETE<Button>
        </form></td>
    </tr>
    @endforeach
    </table>
</body>
</html>
@endsection