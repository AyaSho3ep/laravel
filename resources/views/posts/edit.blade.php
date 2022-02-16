<form action="/posts/{{$id}}" method="post">

@csrf
@method("PATCH")
<label for="id">Id</label><br>
<input type="text" name="id" value="{{$id}}"><br><br>

<label for="title">Title</label><br>
<input type="text" name="title" value="{{$title}}"><br><br>

<label for="description">description</label><br>
<input type="text" name="description" value="{{$description}}"><br><br>

<!-- <label for="title">Title</label><br>
<input type="text" name="title" value="{{$title}}"><br><br> -->

<button type="submit">Update</button>
</form>