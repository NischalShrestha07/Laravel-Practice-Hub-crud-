<h1>Edit Posts</h1>
<form action="{{route('posts.update',$post->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" id="title" value="{{old('title',$post->title)}}">
    <textarea type="textarea" name="content" id="content" value="{{old('content',$post->content)}}"></textarea>
    <button type="submit">Update</button>
</form>