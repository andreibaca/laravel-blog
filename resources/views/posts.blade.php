@extends('layout')
@section('content')
@foreach ($posts as $post)
    <article {{ $loop->odd ? 'class="isodd"' : '' }}>
        <h1>
            <a href="/post/{{ $post->slug }}">
                {{ $post->title }}
            </a>
        </h1>
        <div>{{ $post->snippet }}</div>
    </article>
@endforeach

@endsection