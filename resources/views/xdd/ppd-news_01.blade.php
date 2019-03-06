<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>
九牧管业--湖南响当当九牧管业有限公司-品牌动态-
</title>
<meta name="description" content="品质悦享生活、九牧管业、湖南响当当九牧管业有限公司" />
<meta name="keywords" content="品质悦享生活、九牧管业、湖南响当当九牧管业有限公司" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript" src="/xdd/Scripts/jquery-1.8.3.min.js"></script>
<script>
    $(function () {
      $("#back").click(function(){  
                $('body,html').animate({scrollTop:0},1000);  
                return false;  
            });  
    });
</script>
<script language="javascript" type="text/javascript" src="/xdd/Scripts/jquery.SuperSlide.2.1.1.js"></script>
<link rel="stylesheet" type="text/css" href="/xdd/style/css.css"/>
<link rel="stylesheet" type="text/css" href="/xdd/style/nav.css"/>
</head>
<body>
<div class="header_wrap">
  <div class="header">
    <div class="logo">
      <a href="/" title="首页"><img src="/xdd/images/logo.png"/></a>
    </div>
    <div class="down">
      <!-- <a href="http://dl.jomugy.com/sgb/index.php?s=/Admin/Xkuser/downloadphoto" target="_blank">管路图下载</a> -->
    </div>
    <div class="logo1">
      <img src="/xdd/images/qr.png">
    </div>
    <div id="menu">
      <ul class="nav">
        <li id="m1" class="m">
        <h3><a href="/">首页</a></h3>
        </li>
        <li id="m2" class="m">
        <h3><a href="/brand">品牌介绍</a></h3>
        <div class="sub">
          <ul>
            <li><a href='/brand' title='关于品牌'>关于品牌</a></li>
            <li><a href='/about' title='品牌形象'>品牌形象</a></li>
            <li><a href='/idea' title='品牌理念'>品牌理念</a></li>
            <li><a href='/honor' title='资质荣誉'>资质荣誉</a></li>
          </ul>
        </div>
        </li>
        <li id="m3" class="m">
        <h3><a href="/product">产品中心</a></h3>
        <div class="sub">
          <ul>
            <li class=''><a href='/product' title='精品宝白系列管材 '>精品宝白系列管材&nbsp;</a></li>
            <li class=''><a href='/productt' title='精品宝绿系列管材'>精品宝绿系列管材</a></li>
            <li class=''><a href='/producs' title='PE-RT采暖管'>PE-RT采暖管</a></li>
            <li class=''><a href='/producf' title='PE-RT阻氧管'>PE-RT阻氧管</a></li>
          </ul>
        </div>
        </li>
        <li id="m8" class="m">
        <h3><a href="/solution">解决方案</a></h3>
        </li>
        <li id="m5" class="m">
        <h3><a href="/news">新闻资讯</a></h3>
        <div class="sub">
          <ul>
            <li><a href='/news' title='品牌动态'>品牌动态</a></li>
            <li><a href='/newsone' title='行业资讯'>行业资讯</a></li>
          </ul>
        </div>
        </li>
        <li id="m4" class="m">
        <h3><a href="/marketing">营销网络</a></h3>
        <div class="sub">
          <ul>
            <li><a href='/marketing' title='网络分布'>网络分布</a></li>
            <li><a href='/marketingone' title='在线加盟'>在线加盟</a></li>
          </ul>
        </div>
        </li>
        <li id="m7" class="m">
        <h3><a href="/cuservice">客服中心</a></h3>
        <div class="sub">
          <ul>
            <li><a href='/cuservice' title='品牌服务'>品牌服务</a></li>
            <li><a href='/cuserviceone' title='在线留言'>在线留言</a></li>
            <li><a href='/cuserviceflo' title='常见问题'>常见问题</a></li>
          </ul>
        </div>
        </li>
        <li id="m9" class="m">
        <h3><a href="/case">项目案例</a></h3>
        <div class="sub">
          <ul>
            <li><a href='/case' title='合作伙伴'>合作伙伴</a></li>
            <li><a href='/caseone' title='经典案例'>经典案例</a></li>
          </ul>
        </div>
        </li>
        <li id="m6" class="m">
        <h3><a href="/contactus">联系我们</a></h3>
        <div class="sub">
          <ul>
            <li><a href='/contactus' title='联系我们'>联系我们</a></li>
            <li><a href='/contactusone' title='区域地图'>区域地图</a></li>
          </ul>
        </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<script type="text/javascript">jQuery(".nav").slide({ type:"menu",  titCell:".m", targetCell:".sub",effect:"slideDown", delayTime:300, triggerTime:0,returnDefault:true  });  </script>
<div class="top_bg4">
  <div class="container">
    <div class="location">
      <span>
        <a href='/' title='首页'>首页</a>&nbsp;&gt;&nbsp;
        <a href='/news'>新闻中心</a>&nbsp;&gt;&nbsp;
        @if ($category->id == 2)
        <a href='/newsone'>行业资讯</a>
        @else
        <a href='/news'>品牌动态</a>
        @endif
        
      </span>
    </div>
    <div class="p_l">
      <ul>
        @if ($category->id == 2)
        <li><a href='/news'>品牌动态</a></li>
        <li class='current'><a href='/newsone'>行业资讯</a></li>
        @else
        <li class='current'><a href='/news'>品牌动态</a></li>
        <li><a href='/newsone'>行业资讯</a></li>
        @endif
      </ul>
    </div>
  </div>
</div>

<div class="container pt">
  <div class='nlist'>
@if (count($topics))
  <ul>
    @foreach ($topics as $topic)
      <li>
        <dl>
          <a href="{{ route('topics.show', [$topic->id]) }}" title='{{ $topic->title }}'>
            <dd class='date1'>{{ $topic->updated_at->format("d") }}</dd>
            <dd class='tit3'>{{ $topic->updated_at->format("Y/m") }}
              <h3>{{ $topic->title }}</h3> {{ $topic->reply_count }}
            </dd>
          </a>
        </dl>
      </li>
      @if ( ! $loop->last)
        <hr>
      @endif
    @endforeach
  </ul>
@else
  <div class="empty-block">暂无数据 ~_~ </div>
@endif
    <div class='clear' style='height:20px;'></div>


    {!! $topics->render() !!}
    <style type="text/css">
      .pagination {display: inline-block; padding-left: 0; list-style: none; border-radius: 0.25rem;width: 100%; text-align: center;}
      .pagination li {line-height: 35px; height: 35px; width: 35px!important;display: inline-block; float:initial!important;}
      .pagination li:first-child {padding-left: 10px;}
      .page-item.active .page-link {z-index: 1; color: #fff; background-color: #3490dc; border-color: #3490dc; }
      .page-link {position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: #3490dc; background-color: #fff; border: 1px solid #dee2e6; }
      .page-item{clear: both;}
      .tit3{width: 80%;}

    </style>
  </div>
  <div class="clear"></div>
</div>


<div class="clear">
</div>
<div class="footer">
  <div class="container">
    <div class="clear a1">
    </div>
    <dl>
      <dd class="fl" style="margin-top:10px;"></dd>
      <dd class="fr text_r">
        Copyright &copy; 2016 湖南响当当九牧管业有限公司 All Rights Reserved
      <br/>
湖南省长沙市雨花区万家丽中路华晨世纪广场16F
<br>生产地址:浙江省杭州市临杭工业园区
      </dd>
    </dl>
    <div class="clear">
    </div>
  </div>
</div>
</body>
</html>