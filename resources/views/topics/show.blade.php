@extends('layouts.app')

@section('title', isset($category) ? $category->name : '话题列表')

@section('content')
<section>
  <div class="jumbotron" style="background: url(/images/contact-bg.jpg) no-repeat center;background-size: 100% 100%;filter:alpha(Opacity=80);-moz-opacity:0.8;opacity: 0.8">
    <div class="container">
      @if (isset($category))
        <div class="alert alert-info" role="alert">
          <h1 class="text-dark mb-0" style="font-size: 1rem">{{ $category->name }} ：{{ $category->description }}</h1>
        </div>
      @endif
    </div>
  </div>
</section>
<main role="main" class="container p-3" style="background-color: #fff;">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h1 class="pb-3 mb-4 font-italic border-bottom" style="font-size: 1.5rem"> {{ $topic->title }} </h1>
        <div class="blog-post">
          <p class="blog-post-meta"><span class="badge badge-secondary mr-2">{{ $categorys[0] }}</span>{{ $topic->updated_at->diffForHumans() }}</p>
          <p>{{ $topic->excerpt }}</p>
          <hr>
        </div>
        <div class="blog-post">
          {{ $topic->body }}
        </div>
      </div>
      <aside class="col-md-4 blog-sidebar mt-4 mt-sm-0">
        <div class="p-3">
          <h4 class="font-italic">新闻资讯</h4>
          <ol class="list-unstyled mb-0">
            @if (count($news))
            @foreach ($news as $topic)
            <li><a href="{{ route('topics.show', [$topic->id]) }}">{{ $topic->title }}</a></li>
            @endforeach
            @endif
          </ol>
        </div>
        <div class="p-3">
          <h4 class="font-italic">公司动态</h4>
          <ol class="list-unstyled">
            @if (count($dynamic))
            @foreach ($dynamic as $topic)
            <li><a href="{{ route('topics.show', [$topic->id]) }}">{{ $topic->title }}</a></li>
            @endforeach
            @endif
          </ol>
        </div>
      </aside>
    </div>
  </main>
@endsection