@extends('master')
@section('content')

    <div class="section hidden-lg hidden-md visible-sm-block"></div>
    <div class="section-md hidden-lg visible-md-block hidden-sm hidden-xs"></div>
    <div class="section-lg visible-lg-block hidden-md hidden-sm hidden-xs"></div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <form role="search" method="get" id="searchform" action="/search">
                        <input class="form-control" type="text" name="s" id="s" placeholder="Tìm kiếm..." aria-label="Search">
                        <input type="submit" style="position: absolute; display:none;"/>
                    </form>
                </div>
            </div></br>
            <div class="row">
                <div class="col-sm-6">
                    @if ($product_count == 0)
                        <p><strong>Không tìm thấy sản phẩm phù hợp với điều kiện tìm kiếm.</strong></p>
                    @else
                        <p><strong>Tìm thấy {{ $product_count}} sản phẩm</strong></p>
                    @endif
                </div>
            </div>
            <!-- row -->
            <div class="row">
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
                                    <h4><a href="{{route('detail',[str_slug($item->name,'-'),$item->id])}}">{{ $item->name }}</a></h4>
                                </div>
                                <h5>
                                    <span>{{ number_format($item->price) }} ₫ / </span>
                                    <span>
                                        @if ($item->number_of_unit != 1)
                                            {{ number_format($item->number_of_unit , 0) }}
                                        @endif 
                                        {{ $item->unit->name }}
                                    </span>
                                </h5>
                                <div class=" clear-fix">
                                    @include('page.cart') 
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
                <div class="col-sm-12 col-md-12 col-xs-12 text-center">{{ $products->links() }}</div>
            </div>
        </div>
    </div>
@endsection
