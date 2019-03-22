<footer class="bg-secondary">
    <div class="container">
        <div class="row text-white pt-5">
          <div class="col-12 col-sm-6 col-md-3 text-center pb-4">
            <img class="mb-2 w-100" src="https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/console/logofooter.png" alt="asd">
            <small class="d-block text-dark text-right">{{ __('local Company address') }}</small>
            <small class="d-block text-dark text-right">{{ __('local Copyright') }}</small>
            <small class="d-block text-dark text-right">{{ __('local Production address') }}</small>
          </div>
          <div class="col-7 col-md-2">
          	<div class="row text-center">
                <div class="col-6">
                    <img class="w-100" src="https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/console/weixinqrcode.jpg">
                    <p>{{ __('local Weixinqrcode') }}</p>
                </div>
                <div class="col-6">
                    <img class="w-100" src="https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/console/httpwwwqrcode.jpg">
                    <p>{{ __('local Abbreviation') }}</p>
                </div>
            </div>
          </div>
          <!-- <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-white" href="#">Cool stuff</a></li>
              <li><a class="text-white" href="#">Random feature</a></li>
              <li><a class="text-white" href="#">Team feature</a></li>
              <li><a class="text-white" href="#">Stuff for developers</a></li>
              <li><a class="text-white" href="#">Another one</a></li>
              <li><a class="text-white" href="#">Last time</a></li>
            </ul>
          </div> -->
          <!-- <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-white" href="#">Resource</a></li>
              <li><a class="text-white" href="#">Resource name</a></li>
              <li><a class="text-white" href="#">Another resource</a></li>
              <li><a class="text-white" href="#">Final resource</a></li>
            </ul>
          </div> -->
           <div class="col-5 col-md col-md-offset-4">
            <!-- <h5>关于我们</h5> -->
            <ul class="list-unstyled text-small text-center">
              <li><a class="text-white" href="{{ route('contact.index') }}">联系我们</a></li>
              <li><a class="text-white" href="{{ route('dynamic.index') }}">公司动态</a></li>
              <li><a class="text-white" href="{{ route('news.index') }}">新闻资讯</a></li>
              <li><a class="text-white" href="{{ route('root') }}">网站首页</a></li>
            </ul>
          </div>
        </div>
    </div>
</footer>