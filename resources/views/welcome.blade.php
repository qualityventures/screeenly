@extends('layouts.marketing')

@section('content')

    <section class="u-background--primary u-white text-center c-hero">
        <div class="container">
            <h1 style="font-size: 40px; !important">Screenshots as a Service</h1>

            <p class="lead">Create website screenshots through a simple API. Try it. It's free!</p>
        </div>
    </section>

    <section class="container c-feature-set">

        <div class="row">
            <div class="col-sm-4">
                <h3>Easy as 1, 2, 3</h3>
                <p>
                    Send a request to our API using your API key and a URL and will generate a fresh screenshot.
                </p>
                <p>
                    Screenshots are generated as a file path or as a base64 encoded string. <br><b>Keep in mind that screenshots are deleted from our server after 1 hour.</b></br>
                </p>
            </div>
        </div>

    </section>

@stop
