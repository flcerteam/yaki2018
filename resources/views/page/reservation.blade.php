@extends('master')
@section('content')

<div class="section">
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ $imgSrc }}/yaki-background.jpg)"></div>
</div>

<!-- Reservation -->
<div id="reservation" class="section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url({{ $imgSrc }}/yaki-background.jpg)"></div>
    <!-- /Backgound Image -->

    <!-- container -->
    <div class="container">
        @if($infoBranchList->count() > 0)
        <!-- row -->
        <div class="row">
            <!-- reservation form -->
            <div class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <form action="{{ route('insert_reservation') }}" method="POST">
                    <div class="row">
                        @if(Session::has('thongbao'))
                        <div class="alert alert-success">{{Session::get('thongbao')}}</div>
                        @endif
                    </div>
                    <div class="reserve-form row">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="section-header text-center">
                            <h4 class="sub-title">Thông tin khách hàng</h4>
                            <h2 class="title white-text">Đặt Bàn</h2>
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
                                <label for="birth_date">Ngày Sinh:</label>
                                <input class="input" type="date" placeholder="DD/MM/YYYY" id="birth_date" name="birth_date" required pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}">
                            </div>
                            <div class="form-group">
                                <label for="gender">Giới Tính:</label><br>
                                <input type="radio" id="gender" name="gender" value="0" checked="checked"> Nam
                                &nbsp;&nbsp;&nbsp;
                                <input type="radio" id="gender" name="gender" value="1"> Nữ
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input class="input" type="email" placeholder="Email" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="branch_id">Chi Nhánh:</label>
                                <select class="input" id="branch_id" name="branch_id">
                                    @foreach($infoBranchList as $dtl)
                                        <option value="{{ $dtl->id }}">{{ $dtl->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="reservation_date">Ngày Đặt:</label>
                                <input class="input" type="date" placeholder="DD/MM/YYYY" name="reservation_date" required pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}" min="{{ $dateNow }}">
                            </div>
                            <div class="form-group">
                            <label for="reservation_hour">Thời Gian:</label>
                            <input class="input" type="time" placeholder="HH:MM" id="reservation_hour" name="reservation_hour" required min="{{ $timeBranch['open_hour_val'] }}" max="{{ $timeBranch['close_hour_val'] }}">
                            </div>
                            <div class="form-group">
                                <label for="rt_type_id">Loại Bàn:</label><br>
                                <input type="radio" id="type" name="rt_type_id" value="0" checked="checked"> Bình thường
                                &nbsp;&nbsp;&nbsp;
                                <span id="has_buffet_service" style="@if($infoBranchList->first()->has_buffet_service == 0) display: none; @endif">
                                    <input type="radio" id="type"name="rt_type_id" value="1"> Buffet
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="number_of_people">Số Người:</label>
                                <input class="input" type="number" placeholder="Số Người" name="number_of_people" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label<div class="form-group">
                                <label for="note">Ghi Chú:</label>
                                <textarea class="input" name="note" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <button class="main-button" type="submit">Đặt Ngay</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /reservation form -->

            <!-- opening time -->
            <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1">
                <div class="opening-time row">
                    <div class="section-header text-center">
                        <h2 class="title white-text">Giờ mở/đóng cửa</h2>
                    </div>
                    <div class="text-center">
                        <h4 class="hours"><label id="open_hour">{{ $timeBranch['open_hour'] }}</label> – <label id="close_hour">{{ $timeBranch['close_hour'] }}</label></h4>
                    </div>
                </div>
            </div>
            <!-- /opening time -->
        </div>
        <!-- /row -->
        @else
            @include('page.no-data')
        @endif
    </div>
    <!-- /container -->
    
</div>
<!-- /Reservation -->

<div class="section">
    <div class="bg-image bg-parallax overlay" style="background-image:url({{ $imgSrc }}/yaki-background-01.jpg)"></div>
</div>

@endsection
