<div class="card">
    <div class="card-block">
        <h4 class="card-title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
        <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->toDayDateTimeString() }} by {{ $post->user->name }}</h6>
        <p class="card-text">{{ substr($post->body, 0, 100) . "..." }}</p>

        @if (Auth::check())
        <h6 class="card-subtitle mb-2 text-muted">This post is {{ $post->active ? 'active' : 'inactive' }}</h6>
        @endif

        <a href="/posts/{{ $post->id }}" class="btn btn-primary">Read more</a>
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-success">Edit</a>
        <a href="/posts/{{ $post->id }}/delete" class="btn btn-danger">Delete</a>
    </div>
</div>
