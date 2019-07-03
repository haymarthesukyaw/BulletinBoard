@extends('layout')

@section('content')

@foreach($posts as $post)
    <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>
    {{$post->description}}
    {{$post->status}}
    <a href="{{route('posts.edit',$post->id)}}">Edit</a>
    <form method="post" action="{{route('posts.destroy',$post->id)}}">
    @csrf
    @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    
    <br>
@endforeach
@endsection