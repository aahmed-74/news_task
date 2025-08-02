@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="text-center mb-5">
        <h1 class="mb-3">welcome in our news website</h1>

        @guest
            <a href="{{ route('login') }}" class="btn btn-primary mx-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-primary mx-2">Create an account</a>
        @else
            <a href="{{ route('dashboard') }}" class="btn btn-success">Dashboard</a>
        @endguest
    </div>

</div>
@endsection
