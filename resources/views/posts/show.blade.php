@extends ('layouts.master')

@section ('content')

    <div class="row">
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ $post->created_at->toDayDateTimeString() }} by {{ $post->user->name }}</p>

            {{ $post->body }}
        </div>
    </div>

@endsection
