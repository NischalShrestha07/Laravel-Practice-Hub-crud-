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
    <form action="{{route('test.update',$test)}}" method="POST">
        @csrf
        @method('PUT')
        <input style="margin-bottom:12px;" value="{{old('name',$test->name)}}" type="text" name="name" id="name"><br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <button type="submit">Update</button>
    </form>
</body>

</html>