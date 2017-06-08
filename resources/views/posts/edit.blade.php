@extends ('layouts.master')

@section ('content')

    <div class="row header">
        <h1>Update a Post</h1>
    </div>
    <div class="row">
        <form class="col-lg-12" method="post" action="/posts">
            <input type="hidden" name="id" value="{{ $post->id }}">

            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            @include ('layouts.errors')

            <div class="form-group">
                <label for="title">Title *</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title" required value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="body">Body *</label>
                <textarea class="form-control" id="body" name="body" rows="5" placeholder="Enter post body" required>{{ $post->body }}</textarea>
            </div>
            <div class="form-group">
                <label class="custom-control custom-radio">
                    <input name="active" type="radio" class="custom-control-input" {{ $post->active ? 'checked' : '' }} value="1">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Active</span>
                </label>
                <label class="custom-control custom-radio">
                    <input name="active" type="radio" class="custom-control-input" {{ $post->active ? '' : 'checked' }} value="0">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Inactive</span>
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>

@endsection
