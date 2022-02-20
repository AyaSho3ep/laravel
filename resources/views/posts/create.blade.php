@extends("site_layouts.app")
@section('content')

<form action="/posts" method="post" class="w-25">

@csrf

<!-- <label for="id">Id</label><br>
<input type="text" name="id"><br><br> -->

<label for="title" class="form-label">Title</label><br>
<input type="text" name="title" value="{{old('title')}}" class="form-control"><br>

<label for="description" class="form-label">Description</label><br>
<input type="text" name="description" value="{{old('description')}}" class="form-control"><br>

<!-- <label for="created_at">Created_at</label><br>
<input type="text" name="created_at"><br><br>
 -->
<button type="submit" class="btn btn-primary">Add</button>
</form>
@include('shared.errors')

@endsection