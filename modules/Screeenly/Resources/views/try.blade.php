@extends('layouts.app')

@section('title', 'Try It')

@section('content')

        @if (Session::has('fatal-error'))
            <div class="alert alert-danger">
                Something went wrong capturing this website. Is it a JavaScript heavy site or loads lots of external content? If you think this is an error please contact us.
            </div>
        @endif

        <div class="panel panel-default">
            <div class="panel-heading">Try It</div>
            <div class="panel-body">

                <p style="text-align: left;">Enter a URL and will generate a screenshot for you. Depending on the size of the entered website, the rendering can take some seconds.</p>
                <p style="text-align: left;"><small>JavaScript or Ad-Heavy sites might not be able to be captured.</small></p>

                <form method="post" action="/try">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>URL of Website</label>
                        <input type="text" class="form-control" name="url" required placeholder="https://en.wikipedia.org/wiki/Special:Random" value="">
                    </div>
                    <button type="submit" class="btn btn-primary">Take Screenshot</button>

                </form>
            </div>
        </div>

        @if (Session::has('base64') === true)
            <div class="panel panel-default">
                <div class="panel-heading">Your Screenshot</div>
                <div class="panel-body">
                    <img src="data:image/jpg;base64,{!! Session::get('base64') !!}" class="img-responsive" alt="A randomly generated Screenshot" >
                </div>
            </div>
        @endif

        </div>
    </div>






@endsection
