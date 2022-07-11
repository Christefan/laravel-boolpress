@extends('layouts.dashboard')

@section('content')
    <h1>{{$post->title}}</h1>
    <h2>Slug:{{$post->slug}}</h2>
    <p>{{$post->content}}</p>
    <a class="btn btn-primary" href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">Modifica</a>
    <p><strong>Tags: </strong>
        @forelse ($post->tags as $tag)
            {{ $tag->name }}{{ $loop->last ? '' : ', ' }}
        @empty
            nessuno
        @endforelse
    </p>
    
    <form action="{{ route('admin.posts.destroy', [ 'post' => $post->id ]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Cancella</button>
    </form>
@endsection