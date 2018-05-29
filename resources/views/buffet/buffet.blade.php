@extends('master')
@section('content')

<div class="page-row page-row-expanded">
    <div class="section hidden-lg hidden-md visible-sm-block"></div>
    <div class="section-md hidden-lg visible-md-block hidden-sm hidden-xs"></div>
    <div class="section-lg visible-lg-block hidden-md hidden-sm hidden-xs"></div>

    <div class="section">
        <div class="container">
            <!-- row -->
            @if (0 < count($products))
            <div class="row">
                @foreach ($products as $item)
                <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-md-7 col-sm-7">
                                @if ($item->ribbon->id != '0')
                                    <div class="{{ $item->ribbon->css_class }} ft23-ribbon-thumbnail"><span>{{ $item->ribbon_content }}</span></div>
                                @endif
                                <div class="thumbnail">
                                    @if(null != $item->firstImage())
                                        <img src="{{ $prSrc."/".$item->firstImage()->name }}" alt="{{ $item->name }}">
                                    @else
                                        <img src="{{ $prSrc."/no_image.png" }}" alt="{{ $item->name }}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="caption">
                                    <h3 style="min-height: 85px;">{{ $item->name }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>  
                @endforeach
                <div class="col-sm-12 col-md-12 text-center">{{ $products->links() }}</div>
            </div>
            @else
                <p>Hệ thống đang cập nhật...</p>
            @endif
        </div>
    </div>
</div>
@endsection
