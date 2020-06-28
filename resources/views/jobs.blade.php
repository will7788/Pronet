<!-- //William Thornton, Sam Krall, 06/28/2020 -->
@extends('layouts.app')


@section('content')

<div class="container" action="{{ route("profile.update") }}">

    <h2>Hello, William, These are your relevant job postings! Search for more below.</h2>
    <br>
    <div class="md-form active-purple-2 mb-3">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        <br>
        <a href="#" class="btn btn-primary">Search</a>
    </div>
    <br>
    <hr>

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/image1.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">JavaScript</h5>
          <p class="card-text">JS Developer</p>
          <a href="#" class="btn btn-primary">Visit</a>
        </div>
      </div>
      <br>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/image2.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">CSS Developer</h5>
          <p class="card-text">CSS Development Career</p>
          <a href="#" class="btn btn-primary">Visit</a>
        </div>
      </div>
      <br>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/image3.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Basic Web App Development</h5>
          <p class="card-text">Career in frontend development!</p>
          <a href="#" class="btn btn-primary">Visit</a>
        </div>
      </div>
      <br>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="/images/image4.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Tech Support</h5>
          <p class="card-text">Answer questions about tech!</p>
          <a href="#" class="btn btn-primary">Visit</a>
        </div>
      </div>

    <form method="POST">
        @csrf
        @method("PATCH")
        
        



    </form>

</div>


@endsection