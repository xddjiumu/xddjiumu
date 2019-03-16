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

<section>
  <div class="container p-5 mb-4" style="background-color: #fff;">
    <div class="row">
      <div class="col-12 text-center mt-4">
        @if (isset($category))
        <h2>{{ $category->name }}</h2>
        <p class="text-muted m-0">{{ $category->description }}</p>
        @endif
      </div>
      <div class="col-12 pb-3">
        <div class="card-header bg-transparent">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link {{ active_class( ! if_query('order', 'recent')) }}" href="{{ Request::url() }}?order=default">
                点击排序
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ active_class(if_query('order', 'recent')) }}" href="{{ Request::url() }}?order=recent">
                发布顺序
              </a>
            </li>
          </ul>
        </div>
      </div>
      @if (count($news))
      @foreach ($news as $topic)
      <div class="col-md-3 col-sm-6">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top news-avatar" alt="{{ $topic->title }}" src="{{ isset($topic->avatar) ? $topic->avatar : './images/console/new_default_img.png' }}"/>
          <div class="card-body">
            <h4 class="card-text text-truncate">{{ $topic->title }}</h4>
            <p class="card-text text-pheight4overflow">{{ $topic->excerpt }}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('topics.show', $topic->id) }}"><i class="fa fa-arrow-circle-left fa-spin"></i></a>
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('topics.show', $topic->id) }}">查看</a>
              </div>
              <small class="text-muted">{{ $topic->created_at->diffForHumans() }}</small>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @endif
      <div class="col-12">
        {{-- 分页 --}}
        <div class="mt-2">
          {!! $news->appends(Request::except('page'))->render() !!}
        </div>
      </div>
    </div>
  </div>
</section>
@endsection