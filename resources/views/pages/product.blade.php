@extends('layouts.app')

@section('title', '产品中心')

@section('content')
<div class="text-center indexblock text-white pt-5 my-2" style="background-image: url('http://demo.cssmoban.com/cssthemes5/twts_169_bell/img/parallax-bg.jpg'); background-position: 0px -52.4px;">
  <h2 class="px-2 pt-5">产品中心</h2>
  <p class="pb-5 px-2"></p>
  <div class="row p-2 m-0">
    <div class="col-12 col-sm-8 m-auto">
      <img alt="Bell - A perfect theme" class="w-100" src="/images/indexgadgets.png">
    </div>
  </div>
</div>

<section>
  <div class="container pt-5">
    <div class="row">
      <div class="col-12">
        <h2 class="text-muted">PP-R HOT AND COLD WATER PIPE PIECES</h2>
        <div class="d-flex justify-content-between mb-3">
          <div class="p-2 text-primary"><h2>精品宝白系列管材</h2></div>
          <div class="p-2"><a href="{{ route('product') }}" class="btn btn-primary">查看产品</a></div>
        </div>
        <p class="text-indent">PP-R管道是一种新型的给水管道系统，其以耐热性能好、使用寿命长、耐腐蚀性好、导热系数低、管道阻力小、管件连接牢固、价格便宜等优点，成为目前全球最理想的家庭供水管道，是欧美发达国家给水管道的主导产品，在中国应用率达90%以上。无规共聚丙烯( PP-R)管材在冷热水输送工程中采用热熔接技术，其综合技术性能和经济指标优于镀锌管、UPVC管、铝塑稳态管、交联聚乙烯管及聚丁烯管，同时，其以优异的卫生性能给所有使用者带来了健康的水源。根据权威性资料显示，该类复合原材料的老化期超过50年，经国家化学建材检测中心检测合格。号称永不结垢、永不生锈、永不渗漏、绿色高级给水材料。</p>
      </div>


      <div class="col-md-6">
        <p class="text-indent"><strong class="text-primary" style="font-size: 1.3rem">湖南响当当九牧管业有限公司</strong>是—家专业从事塑料管道产品研究和制造的高新技术企业，公司采用具有国际先进水平的现代化生产设备、专业检测设备和进口优质原料，以传统的制管工艺为依托，传承现代化科技精髓，产品达到国际健康管道标准。企业严格执行IS09001:2008国际质量管理体系认证，产品由由中国人民保险公司承保，荣获"工程建设推荐产品"、 "苏州名牌产品"等荣誉称号，并获得全国二十多个省市自治区的推广证书，深得市场及消费者的认可与青睐。</p>
        <img src="/images/about_pic.jpg" class="img-fluid mb-3 w-100" alt="Responsive image">
        <p class="text-indent">公司以改善全民用水品质，解决水质健康隐患为目标，为中国千万个家庭带来全球领先的健康管道解决方案。公司依托强大的资金实力与雄厚、丰富的资源供应，购置超一流的全自动注塑设备、—体化生产流水线，同步引进世界领先的产品检测设备，专业生产PP-R管材管件、FR/PP-R玻纤增强管材管件、纳米抗菌PP-R管材管件、PE给水管、PVC-U排水管、PVC-U阻燃电工管等管道系列产品。同时，企业在管道行业创新与发展的背景与趋势下，积极探索中国管道产业健康发展与改革之路。通过多年的自主创新与积累，基于产品优质的原材料、先进的生产工艺及优良品质、以及多年来长期安全可靠的市场表现，公司将传统饮用水管道再次创新，借鉴世界领先的产品理念，打造专业管道精品，成就辉煌卓越品质。</p>
      </div>
      <div class="col-md-6">
        <img src="/images/about_pic1.jpg" class="img-fluid mb-3 w-100" alt="Responsive image">
        <p class="text-indent">作为—家集科研、环保管道开发、生产、销售为—体的优秀现代化企业，公司以其优异的质量，良好的形象，多年品牌化市场运作的积淀，已成功建立起成熟的市场基础与品牌信誉。凭借成熟的市场运作经验、全面的渠道分析把控能力，公司产品已消往全国各地，并设立了办事处和特约经销商3000多家，成功构建起诸多品牌强势区域。公司完善的服务也赢得了广大代理商以及装饰、建筑、工程等知名品牌战略合作伙伴的信赖与支持。</p>
        <p class="text-indent">展望未来，公司将坚持走品牌之路，将国际先进的技术工艺与家居洁水理念带入现代家庭，以最高端的产品质量，最贴心的售后服务，关注每—个中国家庭的饮用水安全。</p>
      </div>
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

<div class="text-center text-white p-5 my-2" style="background-image: url('http://demo.cssmoban.com/cssthemes5/twts_169_bell/img/parallax-bg.jpg'); background-position: 0px -52.4px;">
  <h2 class="px-2 pt-5">精品宝绿系列管材</h2>
</div>

<section>
  <div class="container pt-5">
    <div class="row">
      <div class="col-12">
        <h2 class="text-muted">PP-R HOT AND COLD WATER PIPE PIECES</h2>
        <div class="d-flex justify-content-between mb-3">
          <div class="p-2 text-primary"><h2>精品宝绿系列管材</h2></div>
          <div class="p-2"><a href="{{ route('product') }}" class="btn btn-primary">查看产品</a></div>
        </div>
        <p class="text-indent">PP-R管道是一种新型的给水管道系统，其以耐热性能好、使用寿命长、耐腐蚀性好、导热系数低、管道阻力小、管件连接牢固、价格便宜等优点，成为目前全球最理想的家庭供水管道，是欧美发达国家给水管道的主导产品，在中国应用率达90%以上。无规共聚丙烯( PP-R)管材在冷热水输送工程中采用热熔接技术，其综合技术性能和经济指标优于镀锌管、UPVC管、铝塑稳态管、交联聚乙烯管及聚丁烯管，同时，其以优异的卫生性能给所有使用者带来了健康的水源。根据权威性资料显示，该类复合原材料的老化期超过50年，经国家化学建材检测中心检测合格。号称永不结垢、永不生锈、永不渗漏、绿色高级给水材料。</p>
        <img src="/images/p1.jpg" class="img-fluid w-100 mb-3" alt="Responsive image">
      </div>
      <div class="col-md-6">
        <h4 class="text-primary">产品特点</h4>
        <p class="py-1">1、卫生、无毒、无锈蚀、永不结垢</p>
        <p class="py-1">2、耐高温、耐高压</p>
        <p class="py-1">3、采用热熔连接管材、管件同质熔化为一体，安全可靠永不渗漏</p>
        <p class="py-1">4、导热系数低保温性能好</p>
        <p class="py-1">5、重量轻、搬运方便、施工强度低</p>
        <p class="py-1">6、内壁光滑、压力损失小、水流速度快</p>
        <p class="py-1">7、管道传送噪声小</p>
        <p class="py-1">8、产品色彩柔和、外形美观、室内明装、暗装均可</p>
        <p class="py-1">9、安装简易、快捷、施工费用低</p>
        <p class="py-1">10、使用寿命长，在正常条件下，使用寿命可达50年以上</p>
      </div>
      <div class="col-md-6">
        <h4 class="text-primary">技术指标</h4>
        <table class="table">
          <thead>
            <tr>
              <th>项     目</th>
              <th>指     标</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>密度   g/cm3</td>
              <td>0.89~0.91</td>
            </tr>
            <tr>
              <td>熔融温度   ℃</td>
              <td>141~146</td>
            </tr>
            <tr>
              <td>导热系数 W/(m.k)</td>
              <td>  0.23</td>
            </tr>
            <tr>
              <td>热膨胀系数 mm/(m.k)</td>
              <td>0.15</td>
            </tr>
            <tr>
              <td>纵向回缩率(135℃,1h) %</td>
              <td>  ≤2%</td>
            </tr>
            <tr>
              <td>摆锤冲击试验(0℃,15min 15J)</td>
              <td>破损率＜试样的10%</td>
            </tr>
            <tr>
              <td>静液压试验（20℃,1h,环应力:16.0Mpa)</td>
              <td>无破损、无渗漏</td>
            </tr>
            <tr>
              <td>静液压试验（95℃,1000h,环应力:3.5Mpa)</td>
              <td>无破损、无渗漏</td>
            </tr>
            <tr>
              <td>静液压试验（110℃,8760h,环应力:1.9Mpa)</td>
              <td>无破损、无渗漏</td>
            </tr>
          </tbody>
        </table>
      </div>
      <img src="/images/p1.jpg" class="img-fluid w-100 mb-3" alt="Responsive image">
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

<div class="text-center text-white p-5 my-2" style="background-image: url('http://demo.cssmoban.com/cssthemes5/twts_169_bell/img/parallax-bg.jpg'); background-position: 0px -52.4px;">
  <h2 class="px-2 pt-5">品牌理念</h2>
</div>

<section>
  <div class="container pt-5">
    <div class="row">
      <div class="col-md-8">
        <h3 class="text-muted">UNLIMITED PASS TO YOUR HEALTH LIFE</h3>
        <h5 class="text-primary font-weight-bold mb-4">{{ __('local Corporate name') }}，传递给您无限健康生活</h5>
        <p class="text-secondary">生命若水，无色无味，却有着令世间姹紫嫣红色都黯然的色泽，那便是它的澄澈明净；</p>
        <p class="text-secondary">生命若水，无形无态，却有着令万物都望尘莫及的气质，那便是它的灵动顺畅；</p>
        <p class="text-secondary">生命若水，更是一种聪睿的心智，一种的绝美的生存方式……</p>
        <p class="text-secondary">生命与水，源于水，浓于水，溶于水；</p>
        <p class="text-secondary">纯净健康的水，让生命更精彩、更鲜活；</p>
        <p class="text-secondary">苏州九牧管业科技有限公司，绿色科技演绎，传递生命之水，让亿万生命享受健康之源!</p>

        <p class="text-secondary"><strong class="text-primary">企业目标：</strong>打造成世界一流的品牌及企业</p>
        <p class="text-secondary"><strong class="text-primary">企业理念：</strong>重质量、 守信誉 、创品牌 、求发展</p>
        <p class="text-secondary"><strong class="text-primary">经营理念：</strong>以人才和技术为基础，创造最佳产品和服务，让客户满意，共建双赢</p>
        <p class="text-secondary"><strong class="text-primary">服务理念：</strong>全心全力、尽心尽职</p>
        <p class="text-secondary"><strong class="text-primary">质量理念：</strong>高标准、精细化、零缺陷，优秀的产品是优秀的人干出来的</p>
        <p class="text-secondary"><strong class="text-primary">人才理念：</strong>人人是人才，赛马不相马</p>
        <p class="text-secondary"><strong class="text-primary">市场理念：</strong>只有淡季的思想，没有淡季的市场；卖信誉不是卖产品；肯定自我，创造市场</p>
        <p class="text-secondary"><strong class="text-primary">营销理念：</strong>要卖好产品 先做好人品</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="/images/about_pic2.jpg" class="img-fluid mb-3" alt="Responsive image">
      </div>
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

<div class="text-center text-white p-5 my-2" style="background-image: url('http://demo.cssmoban.com/cssthemes5/twts_169_bell/img/parallax-bg.jpg'); background-position: 0px -52.4px;">
  <h2 class="px-2 pt-5">资质荣誉</h2>
</div>

<section>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-3 col-sm-6 text-center">
        <img src="/images/21.gif" class="img-fluid mb-3" alt="Responsive image">
      </div>
      <div class="col-md-3 col-sm-6 text-center">
        <img src="/images/22.gif" class="img-fluid mb-3" alt="Responsive image">
      </div>
      <div class="col-md-3 col-sm-6 text-center">
        <img src="/images/23.gif" class="img-fluid mb-3" alt="Responsive image">
      </div>
      <div class="col-md-3 col-sm-6 text-center">
        <img src="/images/24.gif" class="img-fluid mb-3" alt="Responsive image">
      </div>
    </div>
  </div>
</section>
@stop