@extends ('layouts.master')

@section ('content')

<div class="row">
    @if (count($posts))
        @foreach ($posts as $post)
            @include ('posts.excerpt')
        @endforeach
    @else
        <div class="col-lg-12 text-center">
            @if (Auth::check())
                <h1>There are no posts available.</h1>
            @else
                <h1>We will have some great content for you soon!</h1>
            @endif
        </div>
    @endif
</div>

@endsection
