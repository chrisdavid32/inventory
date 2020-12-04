@extends('layout')
@section('content')
<br>
<br>
<br>
<div class="container mt-5">
      <div class="row">
            <div class="col-3 ml-5">
            </div>
            <div class="col-6 ml-5">
                  @if(session()->has('error'))
                  <div class="alert alert-danger" role="alert">
                        <strong>{{session()->get('error')}}</strong>
                  </div>
                  @endif
                  <form action="/user" method="POST">
                        <div class="form-group mb-3">
                              <label for="email">Email:</label>&nbsp;&nbsp;
                              <input class="form-control" type="email" name="email">
                        </div>
                        @if($errors->first('email'))
                        <div class="alert alert-danger" role="alert">{{$errors->first('email')}}</div>
                        @endif
                        <div class="form-group mb-3">
                              <label for="name">Password:</label>&nbsp;&nbsp;
                              <input class="form-control" type="password" name="password">
                        </div>
                        @if($errors->first('password'))
                        <div class="alert alert-danger" role="alert">{{$errors->first('password')}}</div>
                        @endif
                        <button type="submit" class="btn btn-primary mb-5">Login</button>
                        @csrf
                  </form>
            </div>
      </div>
</div>
@endsection