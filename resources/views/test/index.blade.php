<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a class="btn" href="/test/create">Create</a>

    <table>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Content</th>
            <th>Action</th>

        </tr>

        @php
        $i=1;
        @endphp
        @foreach ($tests as $item)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->content}}</td>
            <td>

                <a href="{{route('test.edit',$item->id)}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>