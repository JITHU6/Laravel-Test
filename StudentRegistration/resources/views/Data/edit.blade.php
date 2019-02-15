<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>

    <form method="Post" action="{{route('test.update',$val->id)}}">
    @method('PATCH')
    @csrf
    <table>
    <tr>
    <td>Title</td>
    <td><input type="text" name="title" value="{{$val->title}}"></td>
    
    </tr>
    <tr>
    <td>Body</td>
    <td><input type="text" name="body" value="{{$val->body}}"></td>
    
    </tr>
    <tr>
    <td></td>
    <td><input type="submit"></td>
    
    </tr>
    </table>
    </form>
</body>
</html>