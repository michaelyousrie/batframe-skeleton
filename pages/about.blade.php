@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>About</h1>
    <p>This page has no controller method. It lives at
    <code>pages/about.blade.php</code> and is served automatically because the
    request path matched the file name. Drop more Blade or HTML files in
    <code>pages/</code> to add static pages.</p>
    <p><a href="/">Back home</a></p>
@endsection
