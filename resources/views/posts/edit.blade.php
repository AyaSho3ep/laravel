<form action="/update" method="post">

@csrf

<label for="id">Id</label><br>
<input type="text" name="id" value="{{$id}}"><br><br>

<label for="name">Name</label><br>
<input type="text" name="name" value="{{$name}}"><br><br>

<label for="body">Body</label><br>
<input type="text" name="body" value="{{$body}}"><br><br>

<label for="title">Title</label><br>
<input type="text" name="title" value="{{$title}}"><br><br>

<button type="submit">Update</button>
</form>