@extends ('layouts.master')

@section ('content')

    <div class="row header">
        <h1>Publish a Post</h1>
    </div>
    <div class="row">
        <form class="col-lg-12" method="post" action="/posts">

            {{ csrf_field() }}

            @include ('layouts.errors')

            <div class="form-group">
                <label for="title">Title *</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title" required>
            </div>
            <div class="form-group">
                <label for="body">Body *</label>
                <textarea class="form-control" id="body" name="body" rows="5" placeholder="Enter post body" required></textarea>
            </div>
            <div class="form-group">
                <label class="custom-control custom-radio">
                    <input name="active" type="radio" class="custom-control-input" value="1">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Active</span>
                </label>
                <label class="custom-control custom-radio">
                    <input name="active" type="radio" class="custom-control-input" value="0">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Inactive</span>
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
        </form>
    </div>

@endsection
