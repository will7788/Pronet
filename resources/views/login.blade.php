@extends('layouts.app')


@section('content')

  <div class="back">
    <div class="div-center">
      <div class="content">
        <h3>Login</h3>
        <hr />
        <form method="POST" action="/logincontrol">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="email" id="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
          <hr />
        </form>
        <form action="./public/register">
          <button type="submit" class="btn btn-link">Register</button>
        </form>
    </div>
    </span>
  </div>

@endsection
