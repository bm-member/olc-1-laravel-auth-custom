@extends('layouts.master')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
    </div>
</div>



@endsection