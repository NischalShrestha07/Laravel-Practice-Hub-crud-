<div class="container" style="display: flex; justify-content: space-between;">

    <h1>Posts</h1>
    <a href="{{route('posts.create')}}">Create Post</a>
</div>
{{-- <ul>
    @foreach ($posts as $post)
    <li>
        Title Name==Slug==Content
        {{$post->title}} == {{$post->slug}}=={{$post->content}}
    </li>

    @endforeach
</ul> --}}

<table border="1">
    <tr class="table-stripped">
        <th>Title</th>
        <th>Slug</th>
        <th>Content</th>
        <th>Actions</th>
    </tr>

    @foreach ($posts as $post)
    <tr>
        <td>{{$post->title}}</td>
        <td>{{$post->slug}}</td>
        <td>{{$post->content}}</td>
        <td>

            <a class="btn" href="{{route('posts.edit',$post->id)}}">Edit</a>
            <form action="{{route('posts.destroy',$post->id)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>