@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <section class="hero">
        <p class="eyebrow reveal"><span class="pulse"></span>Your app is running</p>
        <h1 class="hd reveal">The method <span class="accent">is</span> the route.</h1>
        <p class="lede reveal">You wrote a class. Batframe read your method names and their
        signatures, and answered every URL below. <b>No route table, nothing to register.</b></p>

        <div class="transformer reveal">
            <div class="tf-head">
                <span class="in">your method</span>
                <span class="out">the endpoint</span>
            </div>
            <div class="row">
                <span class="sig"><span class="kw">index</span>()</span>
                <span class="arrow">&rarr;</span>
                <span class="route"><span class="verb">GET</span> <span class="path">/</span></span>
            </div>
            <div class="row">
                <span class="sig"><span class="kw">getUsers</span>()</span>
                <span class="arrow">&rarr;</span>
                <span class="route"><span class="verb">GET</span> <span class="path">/users</span></span>
            </div>
            <div class="row">
                <span class="sig"><span class="kw">getUser</span>(<span class="mut">int</span> $id)</span>
                <span class="arrow">&rarr;</span>
                <span class="route"><span class="verb">GET</span> <span class="path">/user/<span class="ph">{id}</span></span></span>
            </div>
            <div class="row">
                <span class="sig"><span class="kw">postUsers</span>(<span class="mut">Request</span> $r)</span>
                <span class="arrow">&rarr;</span>
                <span class="route"><span class="verb">POST</span> <span class="path">/users</span></span>
            </div>
        </div>
    </section>

    <section class="start">
        <h2>Start here</h2>
        <div class="cards">
            <div class="card">
                <p class="k">ADD A ROUTE</p>
                <h3>Name a method for its verb</h3>
                <p>Add a public method to <code>App</code> or a trait under <code>src/Routes/</code>. Its name becomes the path.</p>
                <pre class="snippet"><span class="kw">public function</span> <span class="fn">getWidgets</span>() {
    <span class="kw">return</span> [<span class="mut">'ok'</span> => <span class="kw">true</span>]; <span class="mut">// GET /widgets</span>
}</pre>
            </div>
            <div class="card">
                <p class="k">EDIT THIS PAGE</p>
                <h3>It&rsquo;s just a view</h3>
                <p>This screen lives at <code>views/home.blade.php</code>. Wire new pages from
                <code>src/Routes/PageRoutes.php</code>, and drop static files in <code>pages/</code>.</p>
                <pre class="snippet"><span class="kw">public function</span> <span class="fn">index</span>() {
    <span class="kw">return</span> <span class="fn">view</span>(<span class="mut">'home'</span>);
}</pre>
            </div>
        </div>
    </section>
@endsection
