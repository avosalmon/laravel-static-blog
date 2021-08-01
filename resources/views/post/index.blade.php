@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
        <article class="mb-10 transition duration-300 transform hover:-translate-y-1 hover:shadow-lg">
            <a class="flex flex-col md:flex-row" href="/posts/{{ $post->slug }}/">
                <img class="object-cover mb-2 md:h-48 md:w-48 md:mr-10 md:mb-0" src="{{ $post->featured_image }}" alt="{{ $post->title }}">
                <div>
                    <h1 class="text-2xl font-semibold leading-tight mb-2">{{ $post->title }}</h1>
                    <p class="text-gray-600 mb-4">{{ $post->publish_date->format('M d, Y') }}</p>
                    <p class="leading-relaxed hidden md:block">{{ $post->excerpt }}</p>
                </div>
            </a>
        </article>
    @endforeach

    <nav class="mt-24 mb-24">
        <div class="flex justify-center">
            @unless ($isFirstPage)
            <a class="flex justify-center items-center w-48 h-12 bg-black text-white mr-14 hover:bg-gray-700" href="/page/{{ $currentPage - 1 }}">< Previous</a>
            @endunless

            @unless ($isLastPage)
            <a class="flex justify-center items-center w-48 h-12 bg-black text-white hover:bg-gray-700" href="/page/{{ $currentPage + 1 }}">Next ></a>
            @endunless
        </div>
    </nav>
@endsection
