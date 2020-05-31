@extends('layouts.app')

@section('content')

<div class="back">
  <div class="div-center">
    <div class="content">
      <h3>Register</h3>
      <hr />
      <form>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="confpassword">Confirm Password</label>
          <input type="password" class="form-control" id="confpassword" placeholder="Confirm Password">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
        <hr />
      </form>
      <form action="/login">
        <button type="submit" class="btn btn-link">Login</button>
        </form>
    </div>
    </span>
  </div>

@endsection
