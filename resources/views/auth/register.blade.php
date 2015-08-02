@extends('layouts.masters')
@section('title', 'Sign up')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Sign up</h1>
        </div>
        <form class="form" action="/auth/register" method="post">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="">first name</label>
                <input class="form-control" type="text" name="first_name" value="{{ old('first_name')  }}"/>
            </div>

            <div class="form-group">
                <label for="">Last name</label>
                <input class="form-control" type="text" name="last_name" value="{{ old('last_name')  }}"/>
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input class="form-control" type="text" name="email" value="{{ old('email')  }}"/>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input class="form-control" type="password" name="password"/>
            </div>
            <div class="form-group">
                <label for="">confirm passoword</label>
                <input class="form-control" type="password" name="password_confirmation"/>
            </div>

            <div class="form-group">
                <button class="btn btn-lg btn-success pull-right" type="submit">Register</button>
            </div>
        </form>
    </div>
@endsection