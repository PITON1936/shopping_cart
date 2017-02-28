@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>Sign In</h1>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('users.signin')}}" method="POST" role="form">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Input your email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password"
                           placeholder="Input your password">
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
            <p>Don`t have an account? <a href="{{ route('users.signup')}}">Sign up instead!</a></p>
        </div>
    </div>
@endsection