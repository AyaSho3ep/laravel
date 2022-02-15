<form action="/store" method="post">

@csrf

<label for="id">Id</label><br>
<input type="text" name="id"><br><br>

<label for="name">Name</label><br>
<input type="text" name="name"><br><br>

<label for="body">Body</label><br>
<input type="text" name="body"><br><br>

<label for="title">Title</label><br>
<input type="text" name="title"><br><br>

<button type="submit">Add</button>
</form>