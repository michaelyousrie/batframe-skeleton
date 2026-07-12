@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <h1>It works!</h1>
    <p>Your Batframe app is running. Start by editing
    <code>src/Routes/PageRoutes.php</code>, or add a new trait under
    <code>src/Routes/</code> and <code>use</code> it in <code>src/App.php</code>.</p>
    <p>A few endpoints are wired up already:</p>
    <ul>
        <li><code>GET /users</code>, a sample JSON endpoint</li>
        <li><code>GET /user/1</code>, a path parameter</li>
        <li><a href="/about">/about</a>, a static page from <code>pages/</code></li>
    </ul>
@endsection
