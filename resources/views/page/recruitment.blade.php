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

    <div id="recruitment" class="section">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
        <!-- /Backgound Image -->

        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-9">
                    @if(count($news) > 0)
                    <div class="panel-group" id="accordion">
                        @foreach($news as $new)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $new->index }}" @if($new->index > 1) aria-expanded="false" class="collapsed"@endif>
                                        <div class="row">
                                            <span class="col-md-1 col-sm-1 col-xs-1 recruitment-index">{{ $new->no }}</span>
                                            <span class="col-md-9 col-sm-9 col-xs-11 recruitment-title">{{ $new->title }}</span>
                                            <span class="col-md-2 col-sm-2 recruitment-publish-date hidden-xs">{{ $new->created_at }}</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div id="collapse{{ $new->index }}" @if($new->index > 1) class="panel-collapse collapse" aria-expanded="false" style="height: 0px;"@else class="panel-collapse collapse in" @endif>
                                <div class="panel-body">
                                    <h5>{!! $new->content !!}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach           
                    </div>
                    @else
                        <p>Hiện tại Yaki không có tin tức tuyển dụng</p>
                    @endif
                </div>

                <div class="col-sm-4 col-md-3">
                    <a href="javascript:void(0)" class="img-thumbnail">
                        <img src="{{ $yakiRecruitmentImg }}" alt="" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url({{ $yakiBgHeaderImg }})"></div>
    <!-- /Backgound Image -->
    
</div>
@endsection
