@extends('master')
@section('content')

    <div class="section hidden-lg hidden-md visible-sm-block"></div>
    <div class="section-md hidden-lg visible-md-block hidden-sm hidden-xs"></div>
    <div class="section-lg visible-lg-block hidden-md hidden-sm hidden-xs"></div>

    <div  class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <form  class="form-inline" role="search" method="get" id="searchform" action="/search" style="margin-top: 0.5em !important">
                        <div class="beta-comp col-lg-1 col-lg-offset-0 col-xs-10 col-xs-offset-1">
                            <input class="form-control" type="text" name="s" id="s" placeholder="Nhập từ khóa" aria-label="Search">
                            <input type="submit" style="position: absolute; display:none;"/>
                        </div>
                    </form>
                </div>
            </div></br>
            <div class="row">
                <div class="col-sm-6">
                    <p><strong>Tìm thấy {{ $product_count}} sản phẩm</strong></p>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                @foreach ($products as $item)
                <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-md-7 col-sm-7">
                                <div class="thumbnail">
                                    <a href="{{route('detail',[$item->name,$item->id])}}">
                                        <img src="{{$prSrc."/".$item->firstImage()->name }}" alt="{{ $item->name }}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="caption">
                                    <a href="{{route('detail',[$item->name,$item->id])}}">
                                        <h3 style="min-height: 85px;">{{ $item->name }}</h3>
                                    </a>
                                    <span>Giá: {{ number_format($item->price) }} VND</span>
                                    <span>/@if ($item->number_of_unit != 1)
                                        {{ number_format($item->number_of_unit,0) }}
                                    @endif {{ $item->unit_type }}</span>
                                    <div class=" clear-fix">
                                        @include('page.cart') 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                @endforeach
                <div class="row">{{ $products->appends(request()->input())->links() }}</div>
            </div>
        </div>
    </div>
    <div class="section"></div>

@endsection
