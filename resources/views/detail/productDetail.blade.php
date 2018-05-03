@extends('master')
@section('content')
<div class="section"></div>
<div  class="section">
    <div class="container dark-grey-text">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-md-6 detail-img">
                <a href="javascript:void(0)" class="img-thumbnail">
                    <img src="img/{{ $item->image }}" alt="" class="img-responsive">
                </a>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-md-6">
                <!--Content-->
                <h3>{{ $item->name }}</h3>
                <p class="lead">
                    <span>Giá: {{ number_format($item->price) }} VND</span>
                    <span>/@if ($item->number_of_unit != 1)
                        {{ number_format($item->number_of_unit,0) }}
                    @endif {{ $item->unit_type }}</span>
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
@endsection
