@extends('site.layouts.master')
@section('title', 'صفحه اصلی')
@section('content')
<section class="single-blog section">
    <div class="container">
        <article class="blog-article">
            <h1 class="blog-title">{{ $post->title }}</h1>
            <div class="blog-meta">
                <span class="blog-author">نویسنده: {{ $post->author->name }}</span>
                <span class="blog-date"> | تاریخ: {{ \Carbon\Carbon::parse($post->published_at)->format('Y/m/d') }}</span>
            </div>

            @if($post->image)
                <div class="blog-image">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                </div>
            @endif

            <div class="blog-content">
                {!! $post->content !!}
            </div>

            <div class="blog-tags">
                <h4>تگ‌ها:</h4>
                <ul>
                    @foreach($post->tags as $tag)
                        <li><a href="{{ route('blog.tag', $tag->slug) }}">#{{ $tag->name }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="blog-categories">
                <h4>دسته‌بندی‌ها:</h4>
                <ul>
                    @foreach($post->categories as $category)
                        <li><a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="blog-share">
                <h4>اشتراک گذاری:</h4>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" class="share-btn facebook">Facebook</a>
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($post->title) }}" target="_blank" class="share-btn twitter">Twitter</a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->fullUrl()) }}&title={{ urlencode($post->title) }}" target="_blank" class="share-btn linkedin">LinkedIn</a>
            </div>

            {{-- بخش نظرات میتونی بعداً اضافه کنی --}}
        </article>
    </div>
</section>
@endsection
