<!-- //William Thornton, Sam Krall, 06/28/2020 -->
@extends('layouts.app')


@section('content')

<div class="container" action="{{ route("profile.update") }}">

    <h2>Hello, {{ $user->name }}! This is your portfolio!</h2>
    <br>
    <hr>

    <h1>Electrician<h1>
    <h3>
        June 2019 - Present
    </h3>

    <h4>
        Just don't touch the black wires unless they're off!
    </h4>
    <br>
    <hr>

    <h1>Pizza Delivery<h1>
        <h3>
            June 2014 - August 2018
        </h3>
        <h4>
            I was a pizza delivery boy, I would deliver pizza in a timely manner and hopefully get nice tips!
        </h4>
    <br>
    <hr>

    <form method="POST">
        @csrf
        @method("PATCH")
        
        



    </form>

</div>


@endsection