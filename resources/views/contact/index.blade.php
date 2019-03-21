@extends('layouts.app')

@section('title', '联系我们')

@section('content')
<section>
  <div class="jumbotron" style="background: url(./images/contact-bg.jpg) no-repeat center;background-size: 100% 100%;filter:alpha(Opacity=80);-moz-opacity:0.8;opacity: 0.8">
    <div class="container">
      <h1 class="text-white">联系我们</h1>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-5 pt-5">
        <div class="entry-content">
          <h2>联系我们</h2>
          <p>无您在何时何地，有需要我们，只需拨打全国统一服务热线：<strong class="text-danger">{{ __('local Tel') }}</strong>，我们就近服务网点立即为您服务，剩下的事都由我们来搞定。您再也不必为记错电话、当地服务电话的变更而烦恼了。</p>
          <div class="d-flex justify-content-start mb-3">
            <div class="p-2"><a href="" class="btn btn-sm"><i class="fa fa-arrow-circle-left"></i></a></div>
            <div class="p-2"><a href="" class="btn btn-sm"><i class="fa fa-arrow-circle-left"></i></a></div>
            <div class="p-2"><a href="" class="btn btn-sm"><i class="fa fa-arrow-circle-left"></i></a></div>
            <div class="p-2"><a href="" class="btn btn-sm"><i class="fa fa-arrow-circle-left"></i></a></div>
            <div class="p-2"><a href="" class="btn btn-sm"><i class="fa fa-arrow-circle-left"></i></a></div>
            <div class="p-2"><a href="" class="btn btn-sm"><i class="fa fa-arrow-circle-left"></i></a></div>
            <div class="p-2"><a href="" class="btn btn-sm"><i class="fa fa-arrow-circle-left"></i></a></div>
            <div class="p-2"><a href="" class="btn btn-sm"><i class="fa fa-arrow-circle-left"></i></a></div>
          </div>
          <div class="d-flex flex-column mb-3">
            <div class="p-2"><i class="fa fa-phone"></i><span> {{ __('local Tel') }}</span></div>
            <div class="p-2"><i class="fa fa-envelope"></i><span> {{ __('local Company email') }}</span></div>
            <div class="p-2"><i class="fa fa-map-marker"></i><span> {{ __('local Company address') }}</span></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-7 pt-5">
        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right"><!-- 联系人 --></label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="联系人" required autofocus>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="mobile" class="col-md-4 col-form-label text-md-right"><!-- 手　机 --></label>
                <div class="col-md-6">
                    <input id="mobile" type="mobile" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" placeholder="手机" required>
                    @if ($errors->has('mobile'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('mobile') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right"><!-- {{ __('E-Mail Address') }} --></label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><!-- 内　容 --></label>
                <div class="col-md-6">
                    <textarea name="message" cols="" rows="5" class="tarea w-100" placeholder="内容"></textarea>
                </div>
            </div>
            <div class="form-group row">
              <label for="captcha" class="col-md-4 col-form-label text-md-right"><!-- {{ __('local Verification Code') }} --></label>
              <div class="col-md-6 input-group mb-3">
                <input id="captcha" class="form-control{{ $errors->has('captcha') ? ' is-invalid' : '' }}" name="captcha" placeholder="{{ __('local Verification Code') }}" required>
                <div class="input-group-append">
                  <img class="" style="height: 2.3rem" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="{{ __('local getVerification Code') }}">
                </div>
                @if ($errors->has('captcha'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ __($errors->first('captcha')) }}</strong>
                  </span>
                @endif
              </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</section>

<section>
  <iframe src="/map.html" class="w-100" style="height: 35rem;border: 0 solid #fff"></iframe>
</section>
@stop