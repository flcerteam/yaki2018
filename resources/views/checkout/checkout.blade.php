@extends('master')
@section('content')
<div class="section error"></div>
<div id="reservation" class="section">

    <!-- Backgound Image -->
    <div class="bg-image" style="background-image:url(layout/img/yaki-background-01.jpg)"></div>
    <!-- /Backgound Image -->

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- infomation form -->
            <div class="col-md-6 col-md-offset-0 col-sm-10">
                <form class="reserve-form row" action="{{ route('insert_order') }}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">@if(Session::has('thongbao'))<div class="alert alert-success">{{Session::get('thongbao')}}</div>@endif</div>
                    <div class="section-header text-center">
                        <h4 class="sub-title">Thông Tin Khách Hàng</h4>
                        <h2 class="title white-text">Đặt Hàng</h2>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone_number">Số Điện Thoại:</label>
                            <input class="input" type="tel" placeholder="Số Điện Thoại" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Tên:</label>
                            <input class="input" type="text" placeholder="Tên" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Giới Tính:</label><br>
                            <input type="radio" id="gender" name="gender" value="0" checked="checked"> Nam
                            &nbsp;&nbsp;&nbsp;
                            <input type="radio" id="gender" name="gender" value="1"> Nữ
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Ngày Sinh:</label>
                            <input class="input" type="date" placeholder="DD/MM/YY" id="birth_date" name="birth_date">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input class="input" type="email" placeholder="Email@gmail.com" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Địa Chỉ:</label>
                            <input class="input" type="text" placeholder="Địa chỉ" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                        <label for="note">Ghi Chú:</label>
                        <textarea class="input" id="note" name="note" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    @if(Cart::count())
                    <div class="col-md-12 text-center" style="margin-top: 10px">
                        <button class="main-button btn-order" type="submit">Đặt Hàng</button>
                    </div>
                    @endif
                </form>
            </div>
            <!-- /infomation form -->

            <!-- opening time -->
            <div class="col-md-6 col-md-offset-0 col-sm-10 ">
                <div class="opening-time row">
                    <div class="section-header text-center">
                        <h2 class="title white-text">Đơn Hàng Của Bạn</h2>
                    </div>
                    @if(count(Cart::content()))
                    <ul class="target-scroll">
                    @foreach (Cart::content() as $item)
                    <li class="list-group-item d-flex justify-content-between lh-condensed" id="{{ $item->id }}">
                        <div class="total-by-item" >
                            <a href="{{route('detail',[str_slug($item->name,'-'),$item->id])}}">
                                <h6 class="my-0">{{ $item->name }}</h6>
                            </a>
                            <div class="col-md-4 col-xs-6 clearfix">
                                <input id="id" type="hidden" value="{{ $item->rowId }}">
                                <input id="quantity" type="text" class="quantity" value="{{ $item->qty }}">
                            </div>
                            <span class="text-muted">x {{ number_format($item->price ) }} VND</span>
                            <a class="pull-right btn-trash" href="javascript:void(0)">
                                <input id="trash-id" type="hidden" value="{{ $item->rowId }}">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                        </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Tổng tiền: </span>
                        <strong class="subTotal">{{ Cart::subtotal()}} VND</strong>
                    </li>
                    </ul>
                    @else
                    <p>Không có sản phẩm nào trong giỏ hàng</p>
                    @endif
                </div>
            </div>
            <!-- /opening time -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
@endsection
