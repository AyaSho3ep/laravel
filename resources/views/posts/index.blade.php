@extends("site_layouts.app")
@section('sidebar')
    @parent
    <h3>new link</h3>
@endsection
@section('content')
<br>
<button class="btn btn-light"><a href="/posts/create">Add New</a></button><br><br>

<table border=2 class="table table-dark table-hover w-75">
    <tr>
        <th>ID</th>
        <th>User Name</th>
        <th>User Email</th>
        <th>Titlle</th>
        <th>Description</th>
        <th>Created_at</th>
    </tr>

@foreach ($posts as $post)
<tr>
    <td>{{$post->id}}</td>
    <td>{{$post->user->name}}</td>
    <td>{{$post->user->email}}</td>
    <td>{{$post->title}}</td>
    <td>{{$post->description}}</td>
    <td>{{$post->created_at}}</td>

    <td><a href="/posts/{{$post->id}}">Show</a></td>
    <!-- router name -->
    <!-- <td><a href="{{route('posts.show', $post['id'])}}">Show</a></td> -->

    <td><a href="/posts/{{$post['id']}}/edit">Edit</a></td>

    <td>
        <form action="/posts/{{$post['id']}}" method="post">
            @csrf
            @method('DELETE')

            <input type="submit" name="delete" value="Delete">
    <!-- <a href="/posts/{{$post['id']}}">Delete</a> -->
        </form>
    </td>

</tr>
@endforeach
</table>

@endsection
