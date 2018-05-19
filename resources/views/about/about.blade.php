@extends('master')
@section('content')
<!-- section header -->
<div class="section"></div>
<div id="about" class="section">
    <div class="container">
        @if (null != $parameter)
        <div class="row">
            <div class="section-header text-center">
                <h2 class="title">{{ trans('common.about_subject') }}</h2>
            </div>
            <!-- /section header -->

            <!-- about content -->
            <div class="col-md-5">
                <a href="javascript:void(0)" class="img-thumbnail">
                    <img src="" alt="" class="img-responsive">
                </a>
            </div>
            <!-- /about content -->

            <!-- about content -->
            <div class="col-md-7">
                <p>{!! $parameter->content !!}</p>
            </div>
            <!-- /about content -->

            <div class="col-md-12">
                <div id="galery" class="owl-carousel owl-theme">
                @for ($i = 0; $i < 10; $i++)
                  <!-- single column -->
                  <div class="galery-item">
                        <div class="item-column">
                            <!-- single image -->
                            <div class="galery-img" style="background-image:url({{ $imgSrc }}/image0{{ $i }}.jpg)"></div>
                            <!-- /single image -->
                        </div>
                        <?php $i++; ?>
                        <div class="item-column">
                            <!-- single image -->
                            <div class="galery-img" style="background-image:url({{ $imgSrc }}/image0{{ $i }}.jpg)"></div>
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
@endsection
