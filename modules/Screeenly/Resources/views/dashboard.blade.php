@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="content">

        <div class="panel panel-default">
            <div class="panel-heading">Documentation</div>

            <div class="panel-body">
                <b>Endpoint:</b> http://webshots.app/api/v1/fullsize
                <br><b>key:</b> Your API Key
                <br><b>url:</b> URL of Website
                <br><b>height:</b> Height of Screenshot
                <br><b>width:</b> Width of Screenshot
                <br><b>delay:</b> Delay in seconds before a screenshot (max 10 seconds)
                <br><b><a href="https://jsfiddle.net/Lw5u109o/">API Example</a></b></br>
            </div>
        </div>

        @if ($apiKeys->count() < 10)
        <div class="panel panel-default">
            <div class="panel-heading">Create new API Keys</div>

            <div class="panel-body">
                @include('screeenly::api-keys._form')
            </div>
        </div>
        @else
            <div class="alert alert-warning">
                <i>You've reached the limit of active API keys.</i>
            </div>
        @endif

        @if ($apiKeys->count() > 0)
            <div class="panel panel-default">
                <div class="panel-heading">{{ $apiKeys->count() }} / 10 API Keys</div>
                @include('screeenly::api-keys._table')
            </div>
        @else
            <div class="alert alert-warning">
                <span>You currently don't have any API keys.</span>
            </div>
        @endif
    </div>
@stop
