@extends('layouts.app')

@section('title', 'About')

@section('content')
    <section class="prose">
        <p class="eyebrow"><span class="pulse"></span>Static page</p>
        <h1>No controller here.</h1>
        <p>This page has no route method. It lives at <span class="inline">pages/about.blade.php</span>
        and Batframe serves it automatically because the request path matched the file name.</p>
        <p>Drop any <span class="inline">.blade.php</span> or <span class="inline">.html</span> file in
        <span class="inline">pages/</span> and it answers at that path. Nested folders work too.</p>
        <p><a href="/">Back home</a></p>
    </section>
@endsection
