<h1>Create Posts</h1>
<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <input type="text" name="title" id="title" placeholder="Title">
    <textarea type="textarea" name="content" id="content" placeholder="Content"></textarea>
    <button type="submit">Save</button>
</form>