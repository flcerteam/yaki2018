@extends('master')
@section('content')

<div class="page-row page-row-expanded">
    <div class="section hidden-lg hidden-md visible-sm-block"></div>
    <div class="section-md hidden-lg visible-md-block hidden-sm hidden-xs"></div>
    <div class="section-lg visible-lg-block hidden-md hidden-sm hidden-xs"></div>

    <div class="section">
        <div class="container">
            @include('nav.subNav')
            <!-- row -->
            <div class="row">
                @foreach ($products as $item)
                <div class="col-sm-6 col-md-6">
                        <div class="row">
                            <div class="col-md-7 col-sm-7">
                                @if ($item->ribbon->id != '0')
                                    <div class="{{ $item->ribbon->css_class }}"><span>{{ $item->ribbon_content }}</span></div>
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
                                    <a href="{{route('detail',[str_slug($item->name,'-'),$item->id])}}">
                                        <h3 style="min-height: 85px;">{{ $item->name }}</h3>
                                    </a>
                                    <span>Giá: {{ number_format($item->price) }} VND</span>
                                    <span>/@if ($item->number_of_unit != 1)
                                        {{ number_format($item->number_of_unit,0) }}
                                    @endif {{ $item->unit->name }}</span>
                                    <div class=" clear-fix">
                                        @include('page.cart') 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                @endforeach
                <div class="col-sm-12 col-md-12 text-center">{{ $products->links() }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
