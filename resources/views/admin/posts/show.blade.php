@extends('layouts.app')

@section('content')
<div class="container">
    <div class="my-5">
        <h1>{{ $post->title }}</h1>
        <p>
          {{ $post->content }}
        </p>     
    </div>
    <div>
      <a href="{{ route('admin.post.edit', $post) }}" class="btn btn-success mr-3">EDIT</a>
      <form onsubmit="return confirm('Vuoi eliminare {{$post->title}}?')" action="{{route('admin.post.destroy', $post)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">DELETE</button>
      </form>
    </div>
</div>
@endsection

@section('title')
    | {{ $post->title }}
@endsection