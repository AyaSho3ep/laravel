<form action="/users" method="post">

@csrf

<!-- <label for="id">Id</label><br>
<input type="text" name="id"><br><br> -->

<label for="name">Name</label><br>
<input type="text" name="name"><br><br>

<label for="email">Email</label><br>
<input type="email" name="email"><br><br>

<label for="password">Password</label><br>
<input type="password" name="password"><br><br>

<button type="submit">Add</button>
</form>