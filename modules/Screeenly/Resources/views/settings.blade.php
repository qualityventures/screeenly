@extends('layouts.app')

@section('title', 'Settings')

@section('content')

    <div class="content">

        <div class="panel panel-default">
            <div class="panel-heading">Account</div>

            <div class="panel-body">

                <form method="post" action="/settings">

                    <p style="text-align: left;">Feel free to change your email address here.</p>

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" required class="form-control" placeholder="{{ Auth::user()->email }}">
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            @foreach($errors->get('email') as $message)
                            {{ $message}}
                            @endforeach
                        </span>
                    @endif

                    <button type="submit" class="btn btn-success">Update Account</button>

                </form>

            </div>
        </div>

        <div class="panel panel-danger">
            <div class="panel-heading">Danger Zone</div>

            <div class="panel-body">

                <form method="post" action="/settings/account">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <p style="text-align: left;">You can permanently delete your account here. All API Keys you currently have will get deleted and can no longer be used to query our API.</p>
                    <p style="text-align: left;"><b>There is no second step.</b> Hit the button and your account is gone!</p>

                    <button type="submit" class="btn btn-danger">Close Account</button>
                </form>

            </div>
        </div>

    </div>

@stop
