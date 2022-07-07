@extends('layouts.dashboard')

@section('content')
    <h1>Lista di tuoi post</h1>
    <div class="row row-cols-4">
        @foreach ($posts as $post)
            <div class="col">
                <div class="card mb-5 py-2 border-dark" style="width: 23rem; min-height: 10rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}" class="btn btn-primary">Leggi post</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection