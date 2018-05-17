@extends('master')
@section('content')
<!-- section header -->
<div class="section"></div>
<div id="about" class="section">
    <div class="container">
        @if(null != $parameter)
        <div class="row">
            <div class="section-header text-center">
                <h4 class="sub-title">About Us</h4>
                <h2 class="title">{{ $parameter->name }}</h2>
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
                <p>{{ $parameter->content }}</p>
            </div>
            <!-- /about content -->
            <div class="col-md-12">
                <div id="galery" class="owl-carousel owl-theme">
                <!-- single column -->
                    <div class="galery-item">
                        <div class="item-column">
                            <!-- single image -->
                            <div class="galery-img" style="background-image:url(layout/img/image02.jpg)"></div>
                            <!-- /single image -->
                        </div>
                        <div class="item-column">
                            <!-- single image -->
                            <div class="galery-img" style="background-image:url(layout/img/image03.jpg)"></div>
                            <!-- /single image -->
                        </div>

                    </div>
                    <!-- single column -->

                    <!-- single column -->
                    <div class="galery-item">

                        <div class="item-column">
                            <!-- single image -->
                            <div class="galery-img" style="background-image:url(layout/img/image04.jpg)"></div>
                            <!-- /single image -->

                            <!-- single image -->
                            <div class="galery-img" style="background-image:url(layout/img/image05.jpg)"></div>
                            <!-- /single image -->
                        </div>

                        <div class="item-column">
                            <!-- single image -->
                            <div class="galery-img" style="background-image:url(layout/img/image06.jpg)"></div>
                            <!-- /single image -->

                            <!-- single image -->
                            <div class="galery-img" style="background-image:url(layout/img/image07.jpg)"></div>
                            <!-- /single image -->
                        </div>
                    </div>
                    <!-- /single column -->
                </div>
            </div>
        </div>
        @else 
            <p>Hệ Thống Đang Bảo Trì. Mong quý khách thông cảm</p>
        @endif
    </div>
</div>
@endsection
