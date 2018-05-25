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

    <div id="about" class="section">

        <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>

        <div class="container">
            @if (null != $parameter)
            <div class="row">
                <div class="section-header text-center">
                    <h2 class="title white-text">{{ trans('common.about_subject') }}</h2>
                </div>
                <!-- /section header -->

                <!-- about content -->
                <div class="col-md-5">
                    <a href="javascript:void(0)" class="img-thumbnail">
                        <img src="{{ $yakiAboutImg }}" alt="" class="img-responsive">
                    </a>
                </div>
                <!-- /about content -->

                <!-- about content -->
                <div class="col-md-7 white-text">
                    <p>{!! $parameter->content !!}</p>
                </div>
                <!-- /about content -->

                <div class="col-md-12">
                    <div id="galery" class="owl-carousel owl-theme">
                    @for ($i = 0; $i < count($images) - 1; $i++)
                    <!-- single column -->
                    <div class="galery-item">
                            <div class="item-column">
                                <!-- single image -->
                                <div class="galery-img" style="background-image:url({{ $images[$i] }})"></div>
                                <!-- /single image -->
                            </div>
                            <?php $i++; ?>
                            <div class="item-column">
                                <!-- single image -->
                                <div class="galery-img" style="background-image:url({{ $images[$i] }})"></div>
                                <!-- /single image -->
                            </div>

                        </div>
                        <!-- single column -->
    
                    @endfor
                    </div>
                </div>
            </div>
            @else 
                <p>Đang cập nhật thông tin...</p>
            @endif
        </div>
    </div>

</div>
@endsection
