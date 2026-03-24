<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h4>Create Test</h4>
    <form action="{{route('test.store')}}" method="POST">
        @csrf
        <input style="margin-bottom:12px;" type="text" name="name" id="name" placeholder="Name"><br>
        <textarea name="content" id="content" placeholder="Content" cols="30" rows="10"></textarea>
        <button type="submit">Create</button>
    </form>
</body>

</html>