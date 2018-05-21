@extends('master')
@section('content')

<div class="section">
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
</div>

<!-- Member -->
<div id="Member" class="section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
    <!-- /Backgound Image -->

    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="col-md-1"></div>
                <form method="POST" onsubmit="return false;">
                    <div class="col-md-6 section-header">
                        <div class="form-group">
                            <input class="input" type="text" placeholder="Số điện thoại" id="phone_number_search" name="phone_number_search" required>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <input class="main-button-member" type="submit" id="search" value="Tra Cứu">
                    </div>
                <form>
                <div class="col-md-2"></div>
            </div>
            <div class="col-md-3"></div>
            <div id="tableMember" class="col-md-12" style="display: none;">
                <div class="col-md-3"></div>
                <div class="col-md-6 reserve-form row">
                    <div class="section-header text-center">
                        <h2 class="title sub-title">Thông tin khách hàng</h2>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone_number">Số Điện Thoại:</label>
                            <input class="input" type="tel" placeholder="Số Điện Thoại" id="phone_number" name="phone_number" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="name">Tên:</label>
                            <input class="input" type="text" placeholder="Tên" id="name" name="name" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Ngày Sinh:</label>
                            <input class="input" type="date" placeholder="DD/MM/YYYY" id="birth_date" name="birth_date" readonly="readonly">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input class="input" type="email" placeholder="Email" id="email" name="email" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="address">Địa Chỉ:</label>
                            <input class="input" type="text" placeholder="Địa chỉ" id="address" name="address" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="gender">Giới Tính:</label><br>
                            <input type="radio" id="gender" name="gender" value="0" checked="checked" readonly="readonly"> Nam
                            &nbsp;&nbsp;&nbsp;
                            <input type="radio" id="gender" name="gender" value="1" readonly="readonly"> Nữ
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div id="msgInfo" class="col-md-12" style="display: none; text-align:center">
                <h2 class="white-text">
                    Không tìm thấy thông tin khách hàng
                <h2>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    
</div>
<!-- /Member -->

<div class="section">
    <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
</div>

<div class="section">
    <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
</div>
@endsection
