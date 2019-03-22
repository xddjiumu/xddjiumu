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
      <span class="iconfont" style="font-size:5rem">&#xe504;</span>
      <h3>PP-R增强管</h3>
      <p class="px-3 text-indent text-left text-muted">中间层加入增强材料实现管道高耐压、高耐温、低线性膨胀系数的效果；外层采用PP-R材料继承了美观、安装方便的特点；弥补了传统纯PP-R管道强度低、膨胀系数大等特点...</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center py-3 px-1 py-md-5 border border-white">
      <span class="iconfont" style="font-size:5rem">&#xe501;</span>
      <h3>PE-RT管</h3>
      <p class="px-3 text-indent text-left text-muted">PE-RT（中密度耐热聚乙烯）地暖管材采用韩国SK生产力学性能十分稳定的中密度聚乙烯管材专用料DX800乙烯和辛烯的共聚产物。它所特有的乙烯主链和辛烯短支链结构...</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center py-3 px-1 py-md-5 border border-white">
      <span class="iconfont" style="font-size:5rem">&#xe50a;</span>
      <h3>PVC-U系列</h3>
      <p class="px-3 text-indent text-left text-muted">硬聚氯乙烯( PVC-U)管材是以PVC树脂为主要原料，加入适量助剂，经混合、挤出、定径、冷却、切割等工艺加工成型，强度高、流体阻力小、稳定性好、使用寿命长、性价比高...</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center py-3 px-1 py-md-5 border border-white">
      <span class="iconfont" style="font-size:5rem">&#xe7a5;</span>
      <h3>精品宝白系列</h3>
      <p class="px-3 text-indent text-left text-muted">PP-R管道是一种新型的给水管道系统，其以耐热性能好、使用寿命长、耐腐蚀性好、导热系数低、管道阻力小、管件连接牢固、价格便宜等优点，成为目前全球最理想的家庭供水管道，是欧美发达国家给水管道的主导产品，在中国应用率达90%以上。</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center py-3 px-1 py-md-5 border border-white">
      <span class="iconfont" style="font-size:5rem">&#xe61d;</span>
      <h3>精品宝绿系列</h3>
      <p class="px-3 text-indent text-left text-muted">PP-R管道是一种新型的给水管道系统，其以耐热性能好、使用寿命长、耐腐蚀性好、导热系数低、管道阻力小、管件连接牢固、价格便宜等优点，成为目前全球最理想的家庭供水管道，是欧美发达国家给水管道的主导产品，在中国应用率达90%以上。无规共聚丙烯( PP-R)管材在冷热水输送工程中采用热熔接技术</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center py-3 px-1 py-md-5 border border-white">
      <span class="iconfont" style="font-size:5rem">&#xe6a3;</span>
      <h3>PE-RT地暖管</h3>
      <p class="px-3 text-indent text-left text-muted">PE-RT家装采暖管，是一种可以用于热水管的非交联的聚乙烯，也有人突出了其非交联的特性，叫它"耐高温非交联聚乙烯"。它是一种采用特殊的分子设计和合成工艺生产的一种中密度聚乙烯，它采用乙烯和辛烯共聚的方法，通过控制侧链的数量和分布得到独特的分子结构，来提高PE的耐热性。</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center py-3 px-1 py-md-5 border border-white">
      <span class="iconfont" style="font-size:5rem">&#xe6a5;</span>
      <h3>PE-RT阻氧管</h3>
      <p class="px-3 text-indent text-left text-muted">PE-RT阻氧地暖管，主要用于地面辐射采暖系统，采用优质的阻氧层EVOH系列中的FP104B材料生产，其PE-RT阻氧管的透氧率是0.07， 德国DIN4726及国家标准GB28799关于带阻氧层的PE-RT的要求为0.1，完全满足标准要求。三层阻氧型PERT采用陶氏化学2388II料，</p>
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
      <p class="text-white">无论您在何时何地，有需要我们，只需拨打全国统一服务热线：<strong class="text-dark" style="font-size: 2rem;">400-041-8868</strong>，我们就近服务网点立即为您服务，剩下的事都由我们来搞定。 </p>
    </div>
    <div class="col-lg-3 col-sm-12 text-lg-right text-center pt-3 ">
      <a class="btn btn-outline-light badge-pill" href="{{ route('contact.index') }}">联系我们</a>
    </div>
  </div>
  </div>
</section>

<section>
  <div class="container py-5">
    <div class="row">
      <div class="col-12 text-center py-md-5 ">
        <h2>团队介绍</h2>
        <p class="text-left text-muted text-indent mx-md-5 px-md-5">湖南响当当九牧管业有限公司是—家专业从事塑料管道产品研究和制造的高新技术企业，公司采用具有国际先进水平的现代化生产设备、专业检测设备和进口优质原料，以传统的制管工艺为依托，传承现代化科技精髓，产品达到国际健康管道标准。企业严格执行IS09001:2008国际质量管理体系认证，产品由由中国人民保险公司承保，荣获"工程建设推荐产品"、并获得全国二十多个省市自治区的推广证书，深得市场及消费者的认可与青睐。</p>
      </div>
      <div class="col-md-4 col-lg-4 text-center py-3">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p class="text-left text-indent">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p class="text-left"><a class="btn btn-secondary" href="#" role="button"><i class="fa fa-user"></i> 查看</a></p>
      </div>
      <div class="col-md-4 col-lg-4 text-center py-3">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p class="text-left text-indent">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        <p class="text-left"><a class="btn btn-secondary" href="#" role="button"><i class="fa fa-user"></i> 查看</a></p>
      </div>
      <div class="col-md-4 col-lg-4 text-center py-3">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p class="text-left text-indent">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p class="text-left"><a class="btn btn-secondary" href="#" role="button"><i class="fa fa-user"></i> 查看</a></p>
      </div>
      <div class="col-md-4 col-lg-4 text-center py-3">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p class="text-left text-indent">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p class="text-left"><a class="btn btn-secondary" href="#" role="button"><i class="fa fa-user"></i> 查看</a></p>
      </div>
      <div class="col-md-4 col-lg-4 text-center py-3">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p class="text-left text-indent">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p class="text-left"><a class="btn btn-secondary" href="#" role="button"><i class="fa fa-user"></i> 查看</a></p>
      </div>
      <div class="col-md-4 col-lg-4 text-center py-3">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p class="text-left text-indent">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p class="text-left"><a class="btn btn-secondary" href="#" role="button"><i class="fa fa-user"></i> 查看</a></p>
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
<!-- 
<hr>
<hr>
<hr>
<hr>

<section>
  <div class="jumbotron text-white rounded bg-primary mb-0 p-0">
    <a class="d-block" href="#"><img class="w-100" src="http://demo.cssmoban.com/cssthemes5/cpts_1029_bnw/images/features.png"></a>
  </div>
</section>

<section>
  <div class="container py-5">
    <div class="row">
      <div class="col-12 text-center py-md-5">
        <h2>常见问题</h2>
        <p class="text-left text-muted text-indent">湖南响当当九牧管业有限公司是—家专业从事塑料管道产品研究和制造的高新技术企业，公司采用具有国际先进水平的现代化生产设备、专业检测设备和进口优质原料，以传统的制管工艺为依托，传承现代化科技精髓，产品达到国际健康管道标准。企业严格执行IS09001:2008国际质量管理体系认证，产品由由中国人民保险公司承保，荣获"工程建设推荐产品"、并获得全国二十多个省市自治区的推广证书，深得市场及消费者的认可与青睐。</p>
      </div>
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p class="text-left"><a class="btn btn-secondary" href="#" role="button"><i class="fa fa-user"></i> 查看</a></p>
      </div>
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p class="text-left"><a class="btn btn-secondary" href="#" role="button"><i class="fa fa-user"></i> 查看</a></p>
      </div>
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p class="text-left"><a class="btn btn-secondary" href="#" role="button"><i class="fa fa-user"></i> 查看</a></p>
      </div>
    </div>
    <hr>
  </div>
</section>


<section>
  <div class="jumbotron text-white rounded bg-primary mb-0">
    <div class="row">
      <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
        <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
      </div>
      <div class="col-md-6 px-0">
        <img src="http://demo.cssmoban.com/cssthemes5/cpts_1029_bnw/images/features.png" alt="Custom Image" class="w-100">
      </div>
    </div>
  </div>
</section>

<section>
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Hello, world!</h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row py-5">
      <div class="col-12 text-center pb-md-5">
        <h2>晌当当九牧管业</h2>
        <p class="text-left text-muted text-indent">湖南响当当九牧管业有限公司是—家专业从事塑料管道产品研究和制造的高新技术企业，公司采用具有国际先进水平的现代化生产设备、专业检测设备和进口优质原料，以传统的制管工艺为依托，传承现代化科技精髓，产品达到国际健康管道标准。企业严格执行IS09001:2008国际质量管理体系认证，产品由由中国人民保险公司承保，荣获"工程建设推荐产品"、并获得全国二十多个省市自治区的推广证书，深得市场及消费者的认可与青睐。</p>
      </div>
      <div class="col-12 col-md-6 text-center">
        <img src="http://demo.cssmoban.com/cssthemes5/cpts_1029_bnw/images/features.png" alt="Custom Image" class="w-100">
      </div>
      <div class="col-12 col-md-6 pt-3">
        <h4>主营产品</h4>
        <p class="text-muted text-indent">公司以改善全民用水品质，解决水质健康隐患为目标，为中国千万个家庭带来全球领先的健康管道解决方案。公司依托强大的资金实力与雄厚、丰富的资源供应，购置超一流的全自动注塑设备、—体化生产流水线，同步引进世界领先的产品检测设备，专业生产PP-R管材管件、FR/PP-R玻纤增强管材管件、纳米抗菌PP-R管材管件、PE给水管、PVC-U排水管、PVC-U阻燃电工管等管道系列产品。同时，企业在管道行业创新与发展的背景与趋势下，积极探索中国管道产业健康发展与改革之路。通过多年的自主创新与积累，基于产品优质的原材料、先进的生产工艺及优良品质、以及多年来长期安全可靠的市场表现，公司将传统饮用水管道再次创新，借鉴世界领先的产品理念，打造专业管道精品，成就辉煌卓越品质。</p>
        <h4>合作伙伴</h4>
        <p class="text-muted text-indent">作为—家集科研、环保管道开发、生产、销售为—体的优秀现代化企业，公司以其优异的质量，良好的形象，多年品牌化市场运作的积淀，已成功建立起成熟的市场基础与品牌信誉。凭借成熟的市场运作经验、全面的渠道分析把控能力，公司产品已消往全国各地，并设立了办事处和特约经销商3000多家，成功构建起诸多品牌强势区域。公司完善的服务也赢得了广大代理商以及装饰、建筑、工程等知名品牌战略合作伙伴的信赖与支持。</p>
        <h4>品质悦享生活</h4>
        <p class="text-muted text-indent">展望未来，公司将坚持走品牌之路，将国际先进的技术工艺与家居洁水理念带入现代家庭，以最高端的产品质量，最贴心的售后服务，关注每—个中国家庭的饮用水安全。</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary">World</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="#">Featured post</a>
            </h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#">Continue reading</a>
          </div>
          <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_169602c9b96%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_169602c9b96%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
        </div>
      </div>
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-success">Design</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="#">Post title</a>
            </h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#">Continue reading</a>
          </div>
          <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_169602c9b9a%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_169602c9b9a%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.203125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 200px; height: 250px;">
        </div>
      </div>
    </div>
  </div>
</section> -->
@stop