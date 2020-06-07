@extends('layouts.app')


@section('content')

<div class="container" action="{{ route("profile.update") }}">

    <h2>Hello, {{ $user->name }}! These are your groups!</h2>
    <br>
    <hr>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/image1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">JavaScript</h5>
          <p class="card-text">All About JavaScript!</p>
          <a href="#" class="btn btn-primary">Visit</a>
          <a href="#" class="btn btn-primary">Edit</a>
          <a href="#" class="btn btn-primary">Remove</a>
        </div>
      </div>
      <br>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/image2.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">CSS Questions</h5>
          <p class="card-text">Get all your relevent questions answered!</p>
          <a href="#" class="btn btn-primary">Visit</a>
          <a href="#" class="btn btn-primary">Edit</a>
          <a href="#" class="btn btn-primary">Remove</a>
        </div>
      </div>
      <br>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/image3.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Basic Web App Development</h5>
          <p class="card-text">Tips and tricks for basic web development.</p>
          <a href="#" class="btn btn-primary">Visit</a>
          <a href="#" class="btn btn-primary">Edit</a>
          <a href="#" class="btn btn-primary">Remove</a>
        </div>
      </div>
      <br>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/image4.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">CS Career Questions</h5>
          <p class="card-text">Ask away :)</p>
          <a href="#" class="btn btn-primary">Visit</a>
          <a href="#" class="btn btn-primary">Edit</a>
          <a href="#" class="btn btn-primary">Remove</a>
        </div>
      </div>

    <form method="POST">
        @csrf
        @method("PATCH")
        
        



    </form>

</div>


@endsection