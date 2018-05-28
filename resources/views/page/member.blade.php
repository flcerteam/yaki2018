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

    <!-- Member -->
    <div id="member" class="section">

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
                            <h2 class="title sub-title">Thông tin thành viên</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Tên:</label>
                                <input class="input" type="text" placeholder="Tên" id="name" name="name" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Loại Thành Viên:</label>
                                <input class="input" type="text" placeholder="Loại Thành Viên" id="member_type_name" name="member_type_name" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Điểm:</label>
                                <input class="input" type="text" placeholder="Điểm" id="member_point" name="member_point" readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div id="msgInfo" class="col-md-12" style="display: none; text-align:center">
                    <h3 class="white-text">
                        Không tìm thấy thông tin thành viên.
                    <h3>
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

</div>
@endsection
