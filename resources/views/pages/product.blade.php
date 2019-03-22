@extends('layouts.app')

@section('title', '产品中心')

@section('content')
<div class="text-center indexblock text-white pt-5 my-2" style="background-image: url('https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/console/parallax-bg.jpg'); background-position: 0px -52.4px;">
  <h2 class="px-2 pt-5">产品中心</h2>
  <p class="pb-5 px-2"></p>
  <div class="row p-2 m-0">
    <div class="col-12 col-sm-8 m-auto">
      <img alt="Bell - A perfect theme" class="w-100" src="https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/indexgadgets.png">
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
          <div class="p-2"><a href="{{ route('product1') }}" class="btn btn-primary">查看产品</a></div>
        </div>
        <p class="text-indent">PP-R管道是一种新型的给水管道系统，其以耐热性能好、使用寿命长、耐腐蚀性好、导热系数低、管道阻力小、管件连接牢固、价格便宜等优点，成为目前全球最理想的家庭供水管道，是欧美发达国家给水管道的主导产品，在中国应用率达90%以上。无规共聚丙烯( PP-R)管材在冷热水输送工程中采用热熔接技术，其综合技术性能和经济指标优于镀锌管、UPVC管、铝塑稳态管、交联聚乙烯管及聚丁烯管，同时，其以优异的卫生性能给所有使用者带来了健康的水源。根据权威性资料显示，该类复合原材料的老化期超过50年，经国家化学建材检测中心检测合格。号称永不结垢、永不生锈、永不渗漏、绿色高级给水材料。</p>
      </div>
      <img src="https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/p2.jpg" class="img-fluid w-100 mb-3" alt="Responsive image">
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
      <img src="https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/p2-1.jpg" class="img-fluid mb-3" alt="Responsive image">
      <div class="col-md-6">
        <h4 class="text-primary">使用范围</h4>
        <p class="py-1">1、冷热饮用水管系统</p>
        <p class="py-1">2、工业流体输送系统 </p>
        <p class="py-1">3、海边设施中给养管道系统</p>
        <p class="py-1">4、空调系统 </p>
        <p class="py-1">5、农业灌溉系统</p>
        <p class="py-1">6、运输工具内部管道系统</p>
      </div>
      <div class="col-md-6">
        <h4 class="text-primary">执行标准</h4>
        <p class="py-1">PP-R管道系列按照GB/T18742.1-2002国家质量监督检验疫总局标准。2002-05-29发布，2003 -01-01</p>
        <p class="py-1">实施。有关标准如下：</p>
        <p class="py-1">GB/T18742.1-2002冷热水用聚丙烯管道系统第1部分：总则</p>
        <p class="py-1">GB/T18742.2 -2002冷热水用聚丙烯管道系统第2部分：管材</p>
        <p class="py-1">GB/T18742.3 -2002冷热水用聚丙烯管道系统第3部分：管件</p>
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

<div class="text-center text-white p-5 my-2" style="background-image: url('https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/console/parallax-bg.jpg'); background-position: 0px -52.4px;">
  <h2 class="px-2 pt-5">精品宝绿系列管材</h2>
</div>

<section>
  <div class="container pt-5">
    <div class="row">
      <div class="col-12">
        <h2 class="text-muted">PP-R HOT AND COLD WATER PIPE PIECES</h2>
        <div class="d-flex justify-content-between mb-3">
          <div class="p-2 text-primary"><h2>精品宝绿系列管材</h2></div>
          <div class="p-2"><a href="{{ route('product2') }}" class="btn btn-primary">查看产品</a></div>
        </div>
        <p class="text-indent">PP-R管道是一种新型的给水管道系统，其以耐热性能好、使用寿命长、耐腐蚀性好、导热系数低、管道阻力小、管件连接牢固、价格便宜等优点，成为目前全球最理想的家庭供水管道，是欧美发达国家给水管道的主导产品，在中国应用率达90%以上。无规共聚丙烯( PP-R)管材在冷热水输送工程中采用热熔接技术，其综合技术性能和经济指标优于镀锌管、UPVC管、铝塑稳态管、交联聚乙烯管及聚丁烯管，同时，其以优异的卫生性能给所有使用者带来了健康的水源。根据权威性资料显示，该类复合原材料的老化期超过50年，经国家化学建材检测中心检测合格。号称永不结垢、永不生锈、永不渗漏、绿色高级给水材料。</p>
        <img src="https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/p1.jpg" class="img-fluid w-100 mb-3" alt="Responsive image">
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
      <img src="https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/p1-1.jpg" class="img-fluid mb-3" alt="Responsive image">
      <div class="col-md-6">
        <h4 class="text-primary">使用范围</h4>
        <p class="py-1">1、冷热饮用水管系统</p>
        <p class="py-1">2、工业流体输送系统 </p>
        <p class="py-1">3、海边设施中给养管道系统</p>
        <p class="py-1">4、空调系统 </p>
        <p class="py-1">5、农业灌溉系统</p>
        <p class="py-1">6、运输工具内部管道系统</p>
      </div>
      <div class="col-md-6">
        <h4 class="text-primary">执行标准</h4>
        <p class="py-1">PP-R管道系列按照GB/T18742.1-2002国家质量监督检验疫总局标准。2002-05-29发布，2003 -01-01</p>
        <p class="py-1">实施。有关标准如下：</p>
        <p class="py-1">GB/T18742.1-2002冷热水用聚丙烯管道系统第1部分：总则</p>
        <p class="py-1">GB/T18742.2 -2002冷热水用聚丙烯管道系统第2部分：管材</p>
        <p class="py-1">GB/T18742.3 -2002冷热水用聚丙烯管道系统第3部分：管件</p>
      </div>
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

<div class="text-center text-white p-5 my-2" style="background-image: url('https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/console/parallax-bg.jpg'); background-position: 0px -52.4px;">
  <h2 class="px-2 pt-5">PE-RT地暖管</h2>
</div>

<section>
  <div class="container pt-5">
    <div class="row">
      <div class="col-12">
        <h2 class="text-muted">PE-RT FLOOR HEATING PIPE</h2>
        <div class="d-flex justify-content-between mb-3">
          <div class="p-2 text-primary"><h2>PE-RT地暖管</h2></div>
        </div>
        <p class="text-indent">PE-RT家装采暖管，是一种可以用于热水管的非交联的聚乙烯，也有人突出了其非交联的特性，叫它"耐高温非交联聚乙烯"。它是一种采用特殊的分子设计和合成工艺生产的一种中密度聚乙烯，它采用乙烯和辛烯共聚的方法，通过控制侧链的数量和分布得到独特的分子结构，来提高PE的耐热性。由于辛烯短支链的存在使PE的大分子不能结晶在一个片状晶体中，而是贯穿在几个晶体中，形成了晶体之间的联结，它保留了PE的良好的柔韧性，高热传导性和惰性，同时使之耐压性更好，这种改性方法和目前市场上常见的PPR类似。PE-RT管可以用于ISO10508中规定的热水管的所有使用级别! 
</p>
        <img src="https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/p3.jpg" class="img-fluid w-100 mb-3" alt="Responsive image">
      </div>
      <div class="col-md-6">
        <h4 class="text-primary">产品特点</h4>
        <p class="py-1">1、无毒、无味、无污染，属绿色环保管材各项卫生指标均符合国家标准。</p>
        <p class="py-1">2、耐酸、耐碱，抗蠕变，抗老化，优异的长期静液压和抗冲性能。</p>
        <p class="py-1">3、内外壁光滑，流体阻力小</p>
        <p class="py-1">4、优异的柔韧性，可焊接性。 </p>
        <p class="py-1">5、可回收性。</p>
        <p class="py-1">6、隔热性能好，节能保温。 </p>
        <p class="py-1">7、安装简便、可靠，采用先进的热熔接法，绝无渗漏。</p>
      </div>
      <div class="col-md-6">
        <h4 class="text-primary">技术指标</h4>
        <table class="table">
          <thead>
            <tr>
              <th>项     目</th>
              <th>试验环应力Mpa</th>
              <th>试验温度℃</th>
              <th>试验时间H</th>
              <th>指标</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>纵向回缩率</td>
              <td>/</td>
              <td>110</td>
              <td>
                en≤8mm        1 
                8mm＜en≤16mm 2 
                en＞16mm       3
              </td>
              <td>＜3%</td>
            </tr>
            <tr>
              <td rowspan="3">静液压试验</td>
              <td>10</td>
              <td>20</td>
              <td>1</td>
              <td rowspan="3">无破损无渗漏</td>
            </tr>
            <tr>
              <td>3.55</td>
              <td>95</td>
              <td>165</td>
            </tr>
            <tr>
              <td>3.5</td>
              <td>95</td>
              <td>1000</td>
            </tr>
            <tr>
              <td>静液压状态下热稳定性试验</td>
              <td>1.9</td>
              <td>110</td>
              <td>8760</td>
              <td>无破损无渗漏</td>
            </tr>
            <tr>
              <td colspan="4">熔体质量流动速率, MFR(190℃, 2.16Kg)                  g/10min</td>
              <td>变化率≤原料的30%</td>
            </tr>
          </tbody>
        </table>
      </div>
      <img src="https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/p3-1.jpg" class="img-fluid mb-3" alt="Responsive image">
      <div class="col-md-6">
        <h4 class="text-primary">使用范围</h4>
        <p class="py-1">1、温水板供暖管：住宅/商场/宾馆/体育馆/医院等的地板温水供暖管 </p>
        <p class="py-1">2、热水供应管路：浴池及温泉管J室内游泳池水管； </p>
        <p class="py-1">3、土壤加温管：用于停车场/动力场/广场/道路； </p>
        <p class="py-1">4、用于农/畜产的温水供暖管； </p>
        <p class="py-1">5、工业用管：用于热交换器及加热盘管、液输送管等。</p>
      </div>
      <div class="col-md-6">
        <h4 class="text-primary">性能特点</h4>
        <p class="py-1">1寸精品一次成型锻造工艺，产品有2路到8路，9路以上可任意拼接</p>
        <p class="py-1">口径：1寸，45间距　　公称压力：PNlO　　可任意选配20或16出水口</p>
        <p class="py-1">精锻黄铜，可分为铜本色和镀镍两种</p>
        <p class="py-1">适合水或浓度不大于60%的乙二醇</p>
        <p class="py-1">主管与支管无缝连接，彻底"绝漏"　　球阀采用直接式出水口</p>
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

<div class="text-center text-white p-5 my-2" style="background-image: url('https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/console/parallax-bg.jpg'); background-position: 0px -52.4px;">
  <h2 class="px-2 pt-5">PE-RT阻氧管</h2>
</div>

<section>
  <div class="container pt-5">
    <div class="row">
      <div class="col-12">
        <h2 class="text-muted">PE-RT OXYGEN BARRIER PIPE</h2>
        <div class="d-flex justify-content-between mb-3">
          <div class="p-2 text-primary"><h2>PE-RT阻氧管</h2></div>
        </div>
        <p class="text-indent">PE-RT阻氧地暖管，主要用于地面辐射采暖系统，采用优质的阻氧层EVOH系列中的FP104B材料生产，其PE-RT阻氧管的透氧率是0.07， 德国DIN4726及国家标准GB28799关于带阻氧层的PE-RT的要求为0.1，完全满足标准要求。三层阻氧型PERT采用陶氏化学2388II料， 三层阻氧有效阻止氧气渗透，对系统末端零部件起到良好保护作用，避免腐蚀老化，延长其使用寿命。</p>
        <div class="d-flex flex-row mb-3">
          <div class="p-2">
            <img src="https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/p4-1.jpg" class="img-fluid mb-3" alt="Responsive image">
          </div>
          <div class="p-2">
            <img src="https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/p4-2.jpg" class="img-fluid mb-3" alt="Responsive image">
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <h4 class="text-primary">PE-RT阻氧管特点：</h4>
        <p class="py-1">1. 利用三层共挤出技术，各层之间不会出现分层现象；各层厚度均匀，管道保持了良好的柔韧性和可弯曲性。</p>
        <p class="py-1">2. 外阻氧层采用防渗氧性能最优越的EVOH（聚乙烯-乙烯醇）材料，使整个管路的阻氧能力达到并超过德国标准及国际标准的要求。测试数据测试表明，阻氧PE-RT管的实际渗氧率远小于标准要求，可以有效防止氧气透过管路溶入采暖系统，有利于整个地热采暖系统的热氧保护。</p>
        <p class="py-1">3. 阻氧层结构密致，质地较硬，改变了原有管道表面过于柔软的特点，大大增强了管道的抗划伤性，对管道起到有效的保护作用。</p>
        <p class="py-1">4. 利用专用的去皮装置（阻氧管削皮器），可以均匀有效地去除端口的阻氧层和胶层，简易进行管材与管件的热熔承插连接。保持了PE-RT管道连接方便可靠、便于维修的应用优点。</p>
      </div>
      <div class="col-md-4">
        <img src="https://thitxdd.oss-cn-hangzhou.aliyuncs.com/jomuxdd/p4-2.jpg" class="img-fluid mb-3" alt="Responsive image">
      </div>
    </div>
  </div>
</section>
@stop