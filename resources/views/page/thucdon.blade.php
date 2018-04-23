@extends('master')
@section('content')
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">
<!--Indicators-->
<ol class="carousel-indicators">
   @foreach ($slide as $sl)
   @if($sl->id ==1)
   <li data-target="#carousel-example-1z" data-slide-to="{{$sl->id -1}}" class="active"></li>
   @else
   <li data-target="#carousel-example-1z" data-slide-to="{{$sl->id -1}}"></li>
   @endif
   @endforeach
</ol>
<!--/.Indicators-->
<!--Slides-->
<div class="carousel-inner" role="listbox">
@foreach ($slide as $sl)
<!--First slide-->
@if($sl->id ==1 )
  <div class="carousel-item active">
     @else
     <div class="carousel-item">
        @endif
        <div class="view" style="background-image: url('source/assets/image/{{$sl->image}}'); background-repeat: no-repeat; background-size: cover;">
           <!-- Mask & flexbox options-->
           <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                 <h1 class="mb-4">
                    <strong>This Is DEMO</strong>
                 </h1>
                 <p>
                    <strong>This Is DEMO</strong>
                 </p>
                 <p class="mb-4 d-none d-md-block">
                    <strong>{{$sl->image}}</strong>
                 </p>
              </div>
              <!-- Content -->
           </div>
           <!-- Mask & flexbox options-->
        </div>
     </div>
     <!--/First slide-->
     @endforeach
  </div>
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--/.Carousel Wrapper-->

<!--Main layout-->
<main>
  <div class="container">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

      <!-- Navbar brand -->
      <span class="navbar-brand">Thực Đơn:</span>

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="basicExampleNav">
        <!-- Links -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('trang-chu')}}">Tất Cả
            </a>
          </li>
          @foreach ($loai_sp as $loai)
            <li class="nav-item">
              <a class="nav-link" href="{{route('product-type',$loai->id)}}">{{$loai->name}}</a>
            </li>
          @endforeach
        </ul>
        <form class="form-inline" role="search" method="get" id="searchform" action="search">
          <div class="beta-comp md-form mt-0">
            <input class="form-control mr-sm-2" type="text" name="s" id="s" placeholder="Nhập từ khóa" aria-label="Search">
            <input type="submit" style="position: absolute; left: -9999px"/>
          </div>
        </form>
        <!-- Links -->
      </div>
      <!-- Collapsible content -->
    </nav>
    <!--/.Navbar-->
    <!--Section: Products v.3-->
    <section class="text-center mb-4">
      <!--Grid row-->
        <div class="row wow fadeIn">
        @if(count($new_product) >0)
        @foreach ($new_product as $new)
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4">
            <!--Card-->
            <div class="card">
              <!--Card image-->
              <div class="view overlay">
                <img src="source/image/product/{{$new->image}}" width="255px" height="200px" class="card-img-top" alt="">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Card image-->
              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h5><small>{{$new->name}}</small></h5>
                </a>
                <div class="single-item-caption">
                  <a class="add-to-cart pull-left sp1" href="">
                    <input type="hidden" value="{{$new->id}}" name="product_id"/>
                    <i class="fa fa-shopping-cart"></i></a>
                  <a class="beta-btn primary" href="{{route('product-detail',$new->id)}}">Details <i class="fa fa-chevron-right"></i></a>
                  <div class="clearfix"></div>
                </div>

                <h4 class="font-weight-bold blue-text">
                  <strong><small>{{number_format($new->unit_price)}} VND</small></strong>
                </h4>

              </div>
              <!--Card content-->
            </div>
            <!--Card-->
          </div>
        @endforeach
        @endif
        </div>
        <div class="row wow fadeIn">{{$new_product ->links()}}</div>
      </section>


@endsection
