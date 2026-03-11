<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Edit Task</h1>
    <form action="{{route('tasks.update', $task->id)}}" method="POST">
        @csrf
        @method('PUT')
        {{-- @php
        dd($task);

        @endphp --}}
        <input type="text" name="title" id="title" value="{{old('title',$task->title)}}">
        <textarea type="textarea" name="description" id="description"
            value="{{old('description',$task->description)}}"></textarea>
        <button type="submit">Update</button>
    </form>
</body>

</html>