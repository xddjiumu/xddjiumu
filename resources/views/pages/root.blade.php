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
      <img class="d-block w-100" src="/images/banner1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/banner2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
	  <img class="d-block w-100" src="/images/banner3.jpg" alt="...">
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


<div class="text-center indexblock text-white pt-5 my-2" style="background-image: url('http://demo.cssmoban.com/cssthemes5/twts_169_bell/img/parallax-bg.jpg'); background-position: 0px -52.4px;">
  <h2 class="px-2">Welcome to a perfect theme</h2>
  <p class="pb-5 px-2">This is the most powerful theme with thousands of options that you have never seen before.</p>
  <div class="row p-2 m-0">
    <div class="col-12 col-sm-8 m-auto">
      <img alt="Bell - A perfect theme" class="w-100" src="http://demo.cssmoban.com/cssthemes5/twts_169_bell/img/gadgets.png">
    </div>
  </div>
</div>

<div class="container pt-3">
  <div class="row m-0 p-md-5">
    <div class="col-12 p-3">
      <h2 class="text-center">Features/特征</h2>
      <p class="text-center">Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center my-2 my-md-5">
      <i class="fa fa-camera-retro fa-5x"></i>
      <h3>Custom Design</h3>
      <p class="px-3">Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center my-2 my-md-5">
      <i class="fa fa-camera-retro fa-5x"></i>
      <h3>Custom Design</h3>
      <p class="px-3">Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center my-2 my-md-5">
      <i class="fa fa-camera-retro fa-5x"></i>
      <h3>Custom Design</h3>
      <p class="px-3">Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center my-2 my-md-5">
      <i class="fa fa-camera-retro fa-5x"></i>
      <h3>Custom Design</h3>
      <p class="px-3">Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center my-2 my-md-5">
      <i class="fa fa-camera-retro fa-5x"></i>
      <h3>Custom Design</h3>
      <p class="px-3">Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center my-2 my-md-5">
      <i class="fa fa-camera-retro fa-5x"></i>
      <h3>Custom Design</h3>
      <p class="px-3">Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center my-2 my-md-5">
      <i class="fa fa-camera-retro fa-5x"></i>
      <h3>Custom Design</h3>
      <p class="px-3">Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.</p>
    </div>
    <div class="col-lg-3 col-sm-6 text-center my-2 my-md-5">
      <i class="fa fa-camera-retro fa-5x"></i>
      <h3>Custom Design</h3>
      <p class="px-3">Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.</p>
    </div>
  </div>
</div>

<section class="container-fluid bg-primary p-5">
  <div class="container">
  <div class="row">
    <div class="col-lg-9 col-sm-12 text-lg-left text-center">
      <h2 class="text-white">Call to Action Section</h2>
      <p class="text-white">Lorem ipsum dolor sit amet, nec ad nisl mandamus imperdiet, ut corpora cotidieque cum. Et brute iracundia his, est eu idque dictas gubergren</p>
    </div>
    <div class="col-lg-3 col-sm-12 text-lg-right text-center pt-3 ">
      <a class="btn btn-outline-light badge-pill" href="#">Buy This Theme</a>
    </div>
  </div>
  </div>
</section>


<section>
<div class="container">
  <div class="row">
    <!-- Section Header -->
    <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
      <h2><span class="highlight-text">Services</span></h2>
      <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque.
      </p>
    </div>
    <!-- Section Header End -->
    <div class="our-services">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
          <div class="service-box">
            <div class="icon">
              <i class="icon_cone"></i>
              <h3>Advertising</h3>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla.
            </p>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
          <div class="service-box">
            <div class="icon">
              <i class="icon_mug"></i>
              <h3>Studio </h3>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla.
            </p>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
          <div class="service-box">
            <div class="icon">
              <i class="icon_currency"></i>
              <h3>Portrait </h3>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">
          <div class="service-box">
            <div class="icon">
              <i class="icon_star-half_alt"></i>
              <h3>Storybook </h3>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla.
            </p>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">
          <div class="service-box">
            <div class="icon">
              <i class="icon_music"></i>
              <h3>Branding </h3>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla.
            </p>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">
          <div class="service-box">
            <div class="icon">
              <i class="icon_cog"></i>
              <h3>Videography </h3>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero praesentium quam nulla.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
@stop