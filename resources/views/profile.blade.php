<!-- //William Thornton, Sam Krall, 06/28/2020 -->
@extends('layouts.app')


@section('content')

<div class="container" action="{{ route("profile.update") }}">

    Hello, {{ $user->name }}!

    <form method="POST">
        @csrf
        @method("PATCH")
        
        



    </form>

</div>


@endsection