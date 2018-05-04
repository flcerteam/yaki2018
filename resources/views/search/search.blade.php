@extends('master')
@section('content')
<div class="section"></div>
<div  class="section">
     <div class="container">
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
                                    <img src="img/{{ $item->image }}" alt="{{ $item->image }}">
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
@endsection
