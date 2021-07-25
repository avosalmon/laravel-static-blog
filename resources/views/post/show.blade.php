@extends('layouts.app')

@section('title', $post->title . ' - ' . config('app.name'))
@section('description', substr($post->excerpt, 0, 155))
@section('featured-image', $post->featured_image)

@section('content')
    <article>
        <a href="/posts/{{ $post->slug }}/">
            <h1 class="text-4xl font-bold leading-tight mb-4 md:text-5xl md:leading-snug md:mb-6">{{ $post->title }}</h1>
        </a>
        <div class="mb-10 md:mb-14">
            <span class="text-gray-600 mr-3">{{ $post->publish_date->format('M d, Y') }}</span>
            @foreach ($post->tags as $tag)
                <span class="bg-gray-200 rounded px-2 py-1 mr-1">{{ $tag->name }}</span>
            @endforeach
        </div>
        <div class="max-w-full prose prose-lg xl:prose-2xl">{!! $post->body !!}</div>
    </article>
@endsection
