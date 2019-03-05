@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Topic / Show #{{ $topic->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('topics.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('topics.edit', $topic->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Title</label>
<p>
	{{ $topic->title }}
</p> <label>Body</label>
<p>
	{{ $topic->body }}
</p> <label>Category_id</label>
<p>
	{{ $topic->category_id }}
</p> <label>View_count</label>
<p>
	{{ $topic->view_count }}
</p> <label>Order</label>
<p>
	{{ $topic->order }}
</p> <label>Excerpt</label>
<p>
	{{ $topic->excerpt }}
</p> <label>Slug</label>
<p>
	{{ $topic->slug }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
