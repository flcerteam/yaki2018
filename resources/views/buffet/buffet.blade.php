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

    <div class="section">
        <div class="container">
            <!-- row -->
            <div class="row">
                @if (0 < count($products))
                    @foreach ($products as $item)
                    <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-md-7 col-sm-7">
                                @if ($item->ribbon->id != '0')
                                    <div class="{{ $item->ribbon->css_class }} ft23-ribbon-thumbnail"><span>{{ $item->ribbon_content }}</span></div>
                                @endif
                                <div class="thumbnail">
                                    <a href="{{route('detail',[str_slug($item->name,'-'),$item->id])}}">
                                        @if(null != $item->firstImage())
                                            <img src="{{ $prSrc."/".$item->firstImage()->name }}" alt="{{ $item->name }}">
                                        @else
                                            <img src="{{ $prSrc."/no_image.png" }}" alt="{{ $item->name }}">
                                        @endif
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="caption">
                                    <div class="menu-content">
                                        <h4>{{ $item->name }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-hr">
                        <div class="col-sm-6">
                            <hr/>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-sm-12 col-md-12 text-center">{{ $products->links() }}</div>
                @else
                    <div class="text-center"><h4>Hệ thống đang cập nhật. Xin vui lòng quay lại sau.</h4></div>
                @endif
            </div>
        </div>
    </div>

    <div class="section"></div>
</div>
@endsection
