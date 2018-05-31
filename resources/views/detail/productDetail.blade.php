@extends('master')
@section('content')

<div class="page-row page-row-expanded">

    <div class="section hidden-lg hidden-md visible-sm-block">
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
    </div>
    <div class="section-md hidden-lg visible-md-block hidden-sm hidden-xs">
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
    </div>
    <div class="section-lg visible-lg-block hidden-md hidden-sm hidden-xs">
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
    </div>

    <div  class="section">
        <div class="container dark-grey-text">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-5 detail-img">
                    @if ($item->ribbon->id != '0')
                        <div class="{{ $item->ribbon->css_class }} ft23-ribbon-thumbnail"><span>{{ $item->ribbon_content }}</span></div>
                    @endif
                    <a href="javascript:void(0)" class="img-thumbnail">
                        @if(null != $item->firstImage())
                            <img src="{{ $prSrc."/".$item->firstImage()->name }}" alt="{{ $item->name }}" class="img-responsive">
                        @else
                        <img src="{{ $prSrc."/no_image.png" }}" alt="{{ $item->name }}" class="img-responsive">
                        @endif
                    </a>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-7">
                    <!--Content-->
                    <h3>{{ $item->name }}</h3>
                    <p class="lead">
                        <span>{{ number_format($item->price) }} ₫</span>
                        <span>/@if ($item->number_of_unit != 1)
                            {{ number_format($item->number_of_unit, 0) }}
                        @endif {{ $item->unit->name }}</span>
                    </p>
                    <p>{{ $item->description }}</p>
                    <div class="d-flex justify-content-left">
                        <!-- Default input -->
                        <div class="form-group">
                            <input type="number" name="sl" id="sl" value="1" aria-label="Search" class="form-control" style="width: 80px">
                        </div>
                        @include('page.cart')
                    </div>
                    <!--Content-->
                </div>
                <!--Grid column-->
            </div>
        </div>
    </div>
</div>
@endsection
