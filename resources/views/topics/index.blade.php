@extends('layouts.app')

@section('title', isset($category) ? $category->name : '话题列表')

@section('content')
<section>
  <div class="jumbotron" style="background: url(https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/contact-bg.jpg) no-repeat center;background-size: 100% 100%;filter:alpha(Opacity=80);-moz-opacity:0.8;opacity: 0.8">
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
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-9 col-md-9 topic-list">
        @if (isset($category))
          <div class="alert alert-info" role="alert">
            {{ $category->name }} ：{{ $category->description }}
          </div>
        @endif
        <div class="card ">
          <div class="card-header bg-transparent">
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link {{ active_class( ! if_query('order', 'recent')) }}" href="{{ Request::url() }}?order=default">
                  最后回复
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ active_class(if_query('order', 'recent')) }}" href="{{ Request::url() }}?order=recent">
                  最新发布
                </a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            {{-- 话题列表 --}}
            @include('topics._topic_list', ['topics' => $topics])
            {{-- 分页 --}}
            <div class="mt-5">
              {!! $topics->appends(Request::except('page'))->render() !!}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 sidebar">
        @include('topics._sidebar')
      </div>
    </div>
  </div>
</section>
@endsection