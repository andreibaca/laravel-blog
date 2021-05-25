@extends('layout')

@section('head')
<h1>Andy's Blog - all posts</h1>
@endsection


@section('content')
@foreach ($posts as $post)
    <article {{ $loop->odd ? 'class="isodd"' : '' }}>
        <h1>
            <a href="/post/{{ $post->id }}">
                {{ $post->title }}
            </a>
        </h1>
        <div>{{ $post->excerpt }}</div>
    </article>
@endforeach

@endsection