<html>
<head>

</head>
<body>
<form method="post" action="{{route('posts.update',$post->id)}}">
    @csrf
    @method('put')
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" value="{{$post->title}}">
  </div>
  
  <div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control" name="description" value="{{$post->description}}">
  </div>
  <div class="form-group">
    <label>Status</label>
    <input type="text" class="form-control" name="status" value="{{$post->status}}">
  </div>
  <input type="hidden" name="create_user_id" value="{{Auth::user()->id}}">
  <input type="hidden" name="updated_user_id" value="{{Auth::user()->id}}">
  <input type="hidden" name="deleted_user_id" value="{{Auth::user()->id}}">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

    