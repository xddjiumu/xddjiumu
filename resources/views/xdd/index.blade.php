<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>
九牧管业--湖南响当当九牧管业有限公司、品质悦享生活
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
            <li class=''><a href='/product' title='精品宝白系列管材 '>精品宝白系列管材 </a></li>
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
<div id="glume">
  <cite class='Nubbt'><span class='on'></span><span></span><span></span><span></span></cite>
  <ul class='Limg'>
    <li><a href='#'><img src="/xdd/images/index_banner.jpg"></a></li>
    <li><a href='#'><img src="/xdd/images/index_banner2.jpg"></a></li>
    <li><a href='#'><img src="/xdd/images/index_banner3.jpg"></a></li>
    <li><a href='#'><img src="/xdd/images/index_banner4.jpg"></a></li>
  </ul>
</div>
<div class="index_con">
  <script src="/xdd/Scripts/jq_scroll.js" type="text/javascript"></script>
  <script type="text/javascript">
$(document).ready(function(){
        $("#scrollDiv").Scroll({line:1,speed:500,timer:3000,up:"but_up",down:"but_down"});
});
  </script>
  <div class="scrollbox">
    <div id="scrollDiv">
      @if ($topics['id'])
      <ul>
        <li>
          <span class='li44'>
            @if ($topics->category_id == 1)
            <a href="/news">品牌动态</a>
            @elseif($topics->category_id == 2)
            <a href="/newsone">行业资讯</a>
            @else
            <a href="/cuserviceflo" title="常见问题">常见问题</a>
            @endif
          </span>
              <span class='li2'>[ {{ $topics->updated_at->format("Y/m/d") }} ]</span>
              <a href="{{ route('topics.show', [$topics->id]) }}" title='{{ $topics->title }}'>
            <h3>{{ $topics['title'] }}</h3>
          </a>
        </li>
      </ul>
      @endif
    </div>
    <div class="scroltit">
      <div class="updown" id="but_down">
        向上
      </div>
      <div class="updown" id="but_up">
        向下
      </div>
    </div>
  </div>
  <ul class="fold_wrap" id="sm">
    <li>
    <a href="/product" title="精品宝白系列管材">
    <div class="mask_b">
      <h4 title="精品宝白系列管材">精品宝白系列管材</h4>
    </div>
    <div class="pic_auto pic_auto1">
    </div>
    </a>
    </li>
    <li>
    <a href="/productt" title="精品宝绿系列管材">
    <div class="mask_b">
      <h4 title="精品宝绿系列管材">精品宝绿系列管材</h4>
    </div>
    <div class="pic_auto pic_auto2">
    </div>
    </a>
    </li>
    <li>
    <a href="/producs" title="精品地暖管">
    <div class="mask_b">
      <h4 title="精品地暖管">精品地暖管</h4>
    </div>
    <div class="pic_auto pic_auto3">
    </div>
    </a>
    </li>
  </ul>
</div>
<div class="bbg">
  <div class="container icons">
    <ul>
      <li class="item"><a href="/solution" title="解决方案">
      <div class="ico">
        <img src="/xdd/images/ico1.png" alt="解决方案">
      </div>
      <div class="itit">
        <div>
          <h2 class="fontr">解决方案</h2>
          <h2>解决方案</h2>
        </div>
      </div>
      </a></li>
      <li class="item"><a href="/marketing" title="营销网络">
      <div class="ico">
        <img src="/xdd/images/ico2.png" alt="营销网络">
      </div>
      <div class="itit">
        <div>
          <h2 class="fontr">营销网络</h2>
          <h2>营销网络</h2>
        </div>
      </div>
      </a></li>
      <li class="item"><a href="/case" title="项目案例">
      <div class="ico">
        <img src="/xdd/images/ico3.png" alt="项目案例">
      </div>
      <div class="itit">
        <div>
          <h2 class="fontr">项目案例</h2>
          <h2>项目案例</h2>
        </div>
      </div>
      </a></li>
      <li class="item" style=" background:none !important"><a href="/cuservice" title="服务中心">
      <div class="ico">
        <img src="/xdd/images/ico4.png" alt="服务热线：400-041-8868">
      </div>
      <div class="itit">
        <div>
          <h2 class="fontr">400-041-8868</h2>
          <h2>服务热线</h2>
        </div>
      </div>
      </a></li>
    </ul>
    <dl class="footer1">
      <dd class="fl" style="margin-top:10px;">
      <img src="/xdd/images/logo1.png" alt="宝士特，苏州名牌，中国管业十大产品">
      </dd>
      <dd class="fr text_r">
    Copyright © 2016 湖南响当当九牧管业有限公司 All Rights Reserved
      <br>
      湖南省长沙市雨花区万家丽中路华晨世纪广场16F
      <br>生产地址:浙江省杭州市临杭工业园区
      </dd>
      <div class="clear">
      </div>
    </dl>
  </div>
</div>
<script type="text/javascript">
(function(){
var slideMenu=function(){
  var sp,st,t,m,sa,l,w,gw,ot;
  return{
    destruct:function(){
        if(m){
          clearInterval(m.htimer);
          clearInterval(m.timer);
        }
    },
    build:function(sm,sw,mt,s,sl,h){
      sp=s; 
      st=sw; 
      t=mt;
      m=document.getElementById(sm);
      sa=m.getElementsByTagName('li');
      l=sa.length; 
      w=m.offsetWidth; 
      gw=w/l;
      ot=Math.floor((w-st)/(l-1)); 
      var i=0;
      for(i;i<l;i++){
        s=sa[i]; 
        s.style.width=gw+'px'; 
        this.timer(s)
      }
      if(sl!=null){
        m.timer=setInterval(function(){
          slideMenu.slide(sa[sl-1])
        },t)}
    },
    timer:function(s){
      s.onmouseover=function(){
        clearInterval(m.htimer);
        clearInterval(m.timer);
        m.timer = setInterval(function(){
          slideMenu.slide(s)
        },t);
        //console.log($(this).find('.mask_b').html());
        $(this).find('.mask_b').show();
        //console.log($(this).find('.mask_b').attr("style"));
    }
      s.onmouseout=function(){
        clearInterval(m.timer);
        clearInterval(m.htimer);
        m.htimer=setInterval(function(){
          slideMenu.slide(s,true)
        },t);
        //console.log($(this).find('.mask_b').html());
       $(this).find('.mask_b').hide();
       //console.log($(this).find('.mask_b').attr("style"));
     }
    },
    slide:function(s,c){
      var cw=parseInt(s.style.width);
      if((cw<st && !c) || (cw>gw && c)){
        var owt=0; var i=0;
        for(i;i<l;i++){
          if(sa[i]!=s){
            var o,ow; var oi=0; o=sa[i]; ow=parseInt(o.style.width);
            if(ow<gw && c){
              oi=Math.floor((gw-ow)/sp); 
              oi=(oi>0)?oi:1; 
              o.style.width=(ow+oi)+'px';
              //console.log(o);
            //console.log(o.style.width);
            }else if(ow>ot && !c){
              oi=Math.floor((ow-ot)/sp); 
              oi=(oi>0)?oi:1; 
              o.style.width=(ow-oi)+'px';
              //console.log(o);
              //console.log(o.style.width);
            }
            if(c){
              owt=owt+(ow+oi)
            }else{
              owt=owt+(ow-oi)
            }
          }
        }
        s.style.width=(w-owt)+'px';
      }else{
        if(m.htimer)
          clearInterval(m.htimer)
        if(m.timer)
          clearInterval(m.timer);
      }
    }
  };
}();
slideMenu.build('sm',205,10,10,1);
})();
$(function(){
  //signHover
  $(".item").hover(function(){
    $(this).find(".ico").children().stop().animate({top:-109},300);
    $(this).find(".itit").children().stop().animate({top:0},300);
  },function(){
    $(this).find(".ico").children().stop().animate({top:0},300);
    $(this).find(".itit").children().stop().animate({top:-40},300);
  });
});
</script>
<script language="javascript" type="text/javascript">
(function(){
    if(!Function.prototype.bind){
        Function.prototype.bind = function(obj){
            var owner = this,args = Array.prototype.slice.call(arguments),callobj = Array.prototype.shift.call(args);
            return function(e){e=e||top.window.event||window.event;owner.apply(callobj,args.concat([e]));};
        };
    }
})();
var glume = function(id){
    this.ctn = document.getElementById(id);
    this.adLis = null;
    this.btns = null;
    this.animStep = 0.2;//动画速度0.1～0.9
    this.switchSpeed = 3;//自动播放间隔(s)
    this.defOpacity = 1;
    this.tmpOpacity = 1;
    this.crtIndex = 0;
    this.crtLi = null;
    this.adLength = 0;
    this.timerAnim = null;
    this.timerSwitch = null;
    this.init();
};
glume.prototype = {
    fnAnim:function(toIndex){
        if(this.timerAnim){window.clearTimeout(this.timerAnim);}
        if(this.tmpOpacity <= 0){
            this.crtLi.style.opacity = this.tmpOpacity = this.defOpacity;
            this.crtLi.style.filter = 'Alpha(Opacity=' + this.defOpacity*100 + ')';
            this.crtLi.style.zIndex = 0;
            this.crtIndex = toIndex;
            return;
        }
        this.crtLi.style.opacity = this.tmpOpacity = this.tmpOpacity - this.animStep;
        this.crtLi.style.filter = 'Alpha(Opacity=' + this.tmpOpacity*100 + ')';
        this.timerAnim = window.setTimeout(this.fnAnim.bind(this,toIndex),50);
    },
    fnNextIndex:function(){
        return (this.crtIndex >= this.adLength-1)?0:this.crtIndex+1;
    },
    fnSwitch:function(toIndex){
        if(this.crtIndex==toIndex){return;}
        this.crtLi = this.adLis[this.crtIndex];
        for(var i=0;i<this.adLength;i++){
            this.adLis[i].style.zIndex = 0;
        }
        this.crtLi.style.zIndex = 2;
        this.adLis[toIndex].style.zIndex = 1;
        for(var i=0;i<this.adLength;i++){
            this.btns[i].className = '';
        }
        this.btns[toIndex].className ='on'
        this.fnAnim(toIndex);
    },
    fnAutoPlay:function(){
        this.fnSwitch(this.fnNextIndex());
    },
    fnPlay:function(){
        this.timerSwitch = window.setInterval(this.fnAutoPlay.bind(this),this.switchSpeed*1000);
    },
    fnStopPlay:function(){
        window.clearTimeout(this.timerSwitch);
    },
    init:function(){
        this.adLis = this.ctn.getElementsByTagName('li');
        this.btns = this.ctn.getElementsByTagName('cite')[0].getElementsByTagName('span');
        this.adLength = this.adLis.length;
        for(var i=0,l=this.btns.length;i<l;i++){
            with({i:i}){
                this.btns[i].index = i;
                this.btns[i].onclick = this.fnSwitch.bind(this,i);
                this.btns[i].onclick = this.fnSwitch.bind(this,i);
            }
        }
        this.adLis[this.crtIndex].style.zIndex = 2;
        this.fnPlay();
        this.ctn.onmouseover = this.fnStopPlay.bind(this);
    this.ctn.onmouseout = this.fnPlay.bind(this);
    }
};
var player1 = new glume('glume');
</script>
</body>
</html>