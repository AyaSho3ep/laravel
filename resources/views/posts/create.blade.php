<form action="/posts" method="post">

@csrf

<!-- <label for="id">Id</label><br>
<input type="text" name="id"><br><br> -->

<label for="title">Title</label><br>
<input type="text" name="title"><br><br>

<label for="description">Description</label><br>
<input type="text" name="description"><br><br>

<!-- <label for="created_at">Created_at</label><br>
<input type="text" name="created_at"><br><br>
 -->
<button type="submit">Add</button>
</form>