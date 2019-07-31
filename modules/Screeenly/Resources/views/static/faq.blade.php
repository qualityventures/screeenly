@extends('layouts.app')

@section('title', 'FAQ')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">FAQ</div>
    <div class="panel-body">

        <h3>I have a problem. How can I reach you?</h3>
        <p>
            The best way is to send us an email at <a href="mailto:contact@webshots.app">contact@webshots.app</a>
        </p>

        <h3>Can I delete my account?</h3>
        <p>
            You can delete your account in your settings. All assoicated logs and APIs are immediately deleted.
        </p>

        <h3>How long are screenshots stored on your server?</h3>
        <p>
            All screenshots created have a lifetime of up to 60 minutes. After 60 minutes the files and the corresponding logs are deleted from the server.
        </p>

        <h3>Why does this service exist?</h3>
        <p>
            We created Webshots because we weren't happy with other screenshot solutions available on the web (too expensive, too slow, don't support webfonts).
        </p>


    </div>
</div>

@stop
