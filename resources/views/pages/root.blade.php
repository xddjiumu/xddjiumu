@extends('layouts.app')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/banner1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/banner2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/banner3.jpg" alt="...">
    {{--
    <div class="carousel-caption d-none d-md-block">
       <h5>..基材.</h5> 
      <p>..阿达收到发生的.</p>
    </div>
    --}}
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container pt-5">
  <div class="row m-0 p-md-5">
    <div class="col-12 p-3">
      <h2 class="text-center">产品细分摘要</h2>
      <p class="text-center">PP-R管材管件、FR/PP-R增强管材管件、纳米抗菌PP-R管材管件、PVC-U排水管等管道系列产品的现代化新型企业</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center py-3 px-1 py-md-5 border border-white">
      <span class="iconfont" style="font-size:5rem">&#xe6e2;</span>
      <h3>PP-R冷热水管</h3>
      <p class="px-3 text-indent text-left text-muted">是一种新型的给水管道系统，其以耐热性能好、使用寿命长、耐腐蚀性好、导热系数低、管道阻力小、管件连接牢固、价格便宜等优点，成为目前全球最理想的家庭供水管道...</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center py-3 px-1 py-md-5 border border-white">
      <span class="iconfont" style="font-size:5rem">&#xe7a5;</span>
      <h3>精品白色系列</h3>
      <p class="px-3 text-indent text-left text-muted">PP-R管道是一种新型的给水管道系统，其以耐热性能好、使用寿命长、耐腐蚀性好、导热系数低、管道阻力小、管件连接牢固、价格便宜等优点，成为目前全球最理想的家庭供水管道，是欧美发达国家给水管道的主导产品，在中国应用率达90%以上。</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center py-3 px-1 py-md-5 border border-white">
      <span class="iconfont" style="font-size:5rem">&#xe61d;</span>
      <h3>精品绿色系列</h3>
      <p class="px-3 text-indent text-left text-muted">PP-R管道是一种新型的给水管道系统，其以耐热性能好、使用寿命长、耐腐蚀性好、导热系数低、管道阻力小、管件连接牢固、价格便宜等优点，成为目前全球最理想的家庭供水管道，是欧美发达国家给水管道的主导产品，在中国应用率达90%以上。无规共聚丙烯( PP-R)管材在冷热水输送工程中采用热熔接技术</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center py-3 px-1 py-md-5 border border-white">
      <span class="iconfont" style="font-size:5rem">&#xe50a;</span>
      <h3>PVC-U系列</h3>
      <p class="px-3 text-indent text-left text-muted">硬聚氯乙烯( PVC-U)管材是以PVC树脂为主要原料，加入适量助剂，经混合、挤出、定径、冷却、切割等工艺加工成型，强度高、流体阻力小、稳定性好、使用寿命长、性价比高...</p>
    </div>
  </div>
</div>

<div class="text-center indexblock text-white pt-5 my-2" style="background-image: url('https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/console/parallax-bg.jpg'); background-position: 0px -52.4px;">
  <h2 class="px-2">产品展示</h2>
  <p class="pb-5 px-2">公司采用具有国际先进水平的现代化生产设备、专业检测设备和进口优质原料，以传统的制管工艺为依托，传承现代化科技精髓，产品达到国际健康管道标准。企业严格执行IS09001:2008国际质量管理体系认证</p>
  <div class="row p-2 m-0">
    <div class="col-12 col-sm-8 m-auto">
      <img alt="Bell - A perfect theme" class="w-100" src="https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/gadgets.png">
    </div>
  </div>
</div>

<section>
  <div class="container pt-5">
    <div class="row">
      <div class="col-12 text-center py-4">
        <h2>新闻资讯</h2>
        <p class="text-muted">发布现行家装行业新的技术标准，技术，行业成熟方案</p>
      </div>
      @if (count($news))
      @foreach ($news as $topic)
      <div class="col-md-3 col-sm-6">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top news-avatar" alt="{{ $topic->title }}" src="{{ isset($topic->avatar) ? __('local oss file images'). $topic->avatar : './images/console/new_default_img.png' }}"/>
          <div class="card-body">
            <h4 class="card-text text-truncate">{{ $topic->title }}</h4>
            <p class="card-text text-pheight4overflow">{{ $topic->excerpt }}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a class="btn btn-sm btn-outline-secondary" href="{{ $topic->link() }}"><i class="fa fa-arrow-circle-left fa-spin"></i></a>
                <a class="btn btn-sm btn-outline-secondary" href="{{ $topic->link() }}">查看</a>
              </div>
              <small class="text-muted">{{ $topic->created_at->diffForHumans() }}</small>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </div>
</section>

<section class="my-5 py-3">
  <div class="progress m-2">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width:10%"></div>
  </div>
  <div class="progress m-2">
    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:20%"></div>
  </div>
  <div class="progress m-2">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width:30%"></div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="col-12 text-center py-4">
        <h2>公司动态</h2>
        <p class="text-muted">发布公司最近运营状态，内部运营，外部活动，加盟招商，优惠活动</p>
      </div>
    <div class="row">
      @if (count($dynamic))
      @foreach ($dynamic as $topic)
      <div class="col-md-3 col-sm-6 my-2">
        <div class="card">
          <img class="card-img-top news-avatar" src="{{ isset($topic->avatar) ? __('local oss file images'). $topic->avatar : 'https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/console/new_default_img.png' }}" alt="{{ $topic->title }}">
          <div class="card-body">
            <h5 class="card-title text-truncate">{{ $topic->title }}</h5>
            <p class="card-text text-pheight4overflow">{{ $topic->excerpt }}</p>
            <a href="{{ $topic->link() }}" class="btn btn-primary"><i class="fa fa-arrows-alt fa-spin"></i> 查看</a>
          </div>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </div>
</section>

<section class="my-5 py-3">
  <div class="progress m-2">
    <div class="" style="width:90%"></div>
    <div class="progress-bar rounded progress-bar-striped progress-bar-animated bg-info" style="width:10%"></div>
  </div>
  <div class="progress m-2">
    <div class="" style="width:80%"></div>
    <div class="progress-bar rounded progress-bar-striped progress-bar-animated" style="width:20%"></div>
  </div>
  <div class="progress m-2">
    <div class="" style="width:70%"></div>
    <div class="progress-bar rounded progress-bar-striped progress-bar-animated bg-success" style="width:30%"></div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row py-5">
      <div class="col-12 text-center py-5">
        <h2>全程顾问式服务</h2>
        <p class="text-muted mx-md-5 px-md-5">无论售前、售中、售后，湖南响当当九牧管业有限公司时刻关注顾客，为顾客所想，紧密无缝的服务体系保证在第一时间了解顾客的需求，强大的执行力则确保第一时间满足顾客的需求。 即使是顾客自身尚未发现的潜在需求，我们也已先行一步，让顾客的生活更无忧。</p>
      </div>
      <div class="col-lg-3 col-sm-6 text-center py-3 px-1 py-md-5 border border-white">
        <i class="fa fa-user-circle fa-5x"></i>
        <h3>400客服</h3>
        <p class="px-3">我们有小姐姐在正常正作时间为你服务</p>
      </div>
      <div class="col-lg-3 col-sm-6 text-center py-3 px-1 py-md-5 border border-white">
        <i class="fa fa-address-card fa-5x"></i>
        <h3>留言</h3>
        <p class="px-3">可以留下你的联系方试我们会根据你的要求给你最服务</p>
      </div>
      <div class="col-lg-3 col-sm-6 text-center py-3 px-1 py-md-5 border border-white">
        <i class="fa fa-spinner fa-5x"></i>
        <h3>微信公众号</h3>
        <p class="px-3">也可以在微信公众号里找到我们哦</p>
      </div>
      <div class="col-lg-3 col-sm-6 text-center py-3 px-1 py-md-5 border border-white">
        <i class="fa fa-universal-access fa-5x"></i>
        <h3>还有更多方式</h3>
        <p class="px-3">还有更多方式我们在努力开发中</p>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid bg-primary py-3">
  <div class="container">
  <div class="row">
    <div class="col-lg-9 col-sm-12 text-lg-left text-center">
      <p class="text-white">无论您在何时何地，有需要我们，只需拨打全国统一服务热线：<strong class="" style="font-size: 2rem;">400-041-8868</strong>，我们就近服务网点立即为您服务，剩下的事都由我们来搞定。 </p>
    </div>
    <div class="col-lg-3 col-sm-12 text-lg-right text-center pt-3 ">
      <a class="btn btn-outline-light badge-pill" href="{{ route('contact.index') }}">联系我们</a>
    </div>
  </div>
  </div>
</section>

<section>
  <iframe src="/map.html" class="w-100" style="height: 35rem;border: 0 solid #fff"></iframe>
</section>

<section>
  <div class="container pt-5">
    <div class="row p-2 py-sm-5">
      <div class="col-12 text-center">
        <h2>联系我们</h2>
        <p class="text-muted">无论您在何时何地，有需要我们，只需拨打全国统一服务热线：<strong class="text-danger">400-041-8868</strong>，我们就近服务网点立即为您服务，剩下的事都由我们来搞定。您再也不必为记错电话、当地服务电话的变更而烦恼了。 </p>
      </div>
      <form method="POST" action="{{ route('contact.store') }}">
        @csrf
        <div class="row">
          <div class="col-12">
            <textarea rows="10" cols="100" class="form-control" placeholder="留言信息" required data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" maxlength="999" style="resize:none" name="message"></textarea>
            @if ($errors->has('message'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('message') }}</strong>
                </span>
            @endif
          </div>
          <div class="col-12 col-sm-6 py-2">
            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="称呼" required>
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
          <div class="col-12 col-sm-6 py-2">
            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          
          <div class="col-12 col-sm-6 py-2">
            <input type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" placeholder="联系电话" required>
            @if ($errors->has('mobile'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('mobile') }}</strong>
                </span>
            @endif
          </div>

          <div class="col-12 col-sm-6 py-2 input-group mb-3">
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
          <div class="col-12 py-3 text-center">
            <button type="submit" class="btn btn-primary">提交</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
@stop