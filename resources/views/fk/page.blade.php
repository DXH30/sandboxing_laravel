<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form action="" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="file" name="forwardkey">
        <input type="submit" value="upload">
    </form>
    <ul>
        @foreach($files as $f)
            <li><a href="fk/diagram">{{$f}}</a></li>
        @endforeach
    </ul>
</body>
</html>
