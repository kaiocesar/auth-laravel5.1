@extends('layouts.masters')
@section('title', 'Login page')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Sign in</h1>
        </div>
        <form class="form" action="/auth/login" method="post">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="">Email</label>
                <input class="form-control" type="text" name="email" value="{{ old('email')  }}"/>
            </div>

            <div class="form-group">
                <label for="">Passoword</label>
                <input class="form-control" type="password" name="password"/>
            </div>

            <div class="form-group">
                <button class="btn btn-lg btn-success pull-right" type="submit">Sign in</button>
            </div>
        </form>
    </div>
@endsection