<h1>
    Create Task
</h1>
<form action="{{route('tasks.store')}}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <textarea type="text" name="description" placeholder="Text"></textarea>
    <button type="submit">Save</button>
</form>