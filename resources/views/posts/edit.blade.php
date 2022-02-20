@extends("site_layouts.app")
@section('content')

<form action="/posts/{{$id}}" method="post" class="w-25">

@csrf
@method("PATCH")
<label for="id" class="form-label">Id</label><br>
<input type="text" name="id" value="{{$id}}" class="form-control"><br>

<label for="title" class="form-label">Title</label><br>
<input type="text" name="title" value="{{$title}}" class="form-control"><br>

<label for="description" class="form-label">description</label><br>
<input type="text" name="description" value="{{$description}}" class="form-control"><br>

<!-- <label for="title">Title</label><br>
<input type="text" name="title" value="{{$title}}"><br><br> -->

<button type="submit" class="btn btn-primary">Update</button>
</form>
@include('shared.errors')

@endsection