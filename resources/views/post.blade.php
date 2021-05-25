
@extends('layout')

@section('head')
<h1>Andy's Blog - single page</h1>
@endsection

@section('content')
    <article>
        <h1>
            {{ $post->title }}

        </h1>
        <div>{!! $post->body !!}</div>
    </article>
    <a href="/">Go Back</a>
@endsection