@extends('layouts.marketing')

@section('content')

    <section class="u-background--primary u-white text-center c-hero">
        <div class="container">
            <h1 class="u-fs--ultra">Screenshots as a Service</h1>

            <p class="lead">Create website screenshots through a simple API. Try it. It's free!</p>
        </div>
    </section>

    <section class="container c-feature-set">

        <div class="row">
            <div class="col-sm-4">
                <h3>Simple</h3>
                <p>
                    Just send your API key and a URL to our API and we create a fresh screenshot for you.
                </p>
                <p>
                    Screenshots come as a file path or as a base64 encoded string. <b>Keep in mind that screenshots are deleted from our server after 1 hour.</b>
                </p>
            </div>
        </div>

    </section>

@stop
