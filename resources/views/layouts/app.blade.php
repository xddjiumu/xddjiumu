<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', __('local Abbreviation')) - {{ __('local Corporate name') }}</title>
  <meta name="description" content="@yield('description', __('local default description'))">
  <meta name="keywords" content="@yield('keywords', __('local default keywords'))" />
  <meta name="csrf-token" content="{{ csrf_token() }}">{{-- CSRF Token --}}
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">{{-- Styles --}}
  <script>
  var _hmt = _hmt || [];
  (function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?a3bce2022619eb311125de4b2941899b";
    var s = document.getElementsByTagName("script")[0]; 
    s.parentNode.insertBefore(hm, s);
  })();
  </script>
  <script>
  var _hmt = _hmt || [];
  (function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?2d8cee5523019f8a7fc8d80fc04797af";
    var s = document.getElementsByTagName("script")[0]; 
    s.parentNode.insertBefore(hm, s);
  })();
  </script>
</head>
<body>
  <div id="app" class="{{ route_class() }}-page">
    @include('layouts._header')
    <div class="container">
      @include('shared._messages')
    </div>
    @yield('content')
    @include('layouts._footer')
  </div>
  <script src="{{ mix('js/app.js') }}"></script>{{-- Scripts --}}
</body>
</html>