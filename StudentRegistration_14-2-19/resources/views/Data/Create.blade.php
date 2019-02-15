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

    <form method="POST" action="{{route('test.store')}}">
    @csrf
    <table>
    <tr>
    <td>Title</td>
    <td><input type="text" name="title"></td>
    
    </tr>
    <tr>
    <td>Body</td>
    <td><input type="text" name="body"></td>
    
    </tr>
    <tr>
    <td></td>
    <td><input type="submit"></td>
    
    </tr>
    </table>
    </form>
</body>
</html>