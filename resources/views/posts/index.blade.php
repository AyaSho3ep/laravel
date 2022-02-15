<br>
<button><a href="/create">Add New</a></button><br><br>

<table border=2>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Body</th>
        <th>Title</th>
    </tr>

@foreach ($posts as $post)
<tr>
    <td>{{$post['id']}}</td>
    <td>{{$post['name']}}</td>
    <td>{{$post['body']}}</td>
    <td>{{$post['title']}}</td>
    <td><a href="/show/{{$post['id']}}">Show</a></td>
    <td><a href="/edit/{{$post['id']}}">Edit</a></td>
    <td><a href="/delete/{{$post['id']}}">Delete</a></td>

</tr>
@endforeach
</table>
