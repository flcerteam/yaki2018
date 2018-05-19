@extends('master')
@section('content')

<div class="section"></div>
<div id="recruitment" class="section">
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
                                        <span class="col-md-1" style="color: #d9d9d9;font-size: 18px;">{{ $new->no }}</span>
                                        <span class="col-md-9" style="height: 100%;">
                                            {{ $new->title }}
                                        </span>
                                        <span class="col-md-2 hidden-xs" style="text-align: right;font-size: 12px;font-style: italic;">{{ $new->created_at }}</span>
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                        <div id="collapse{{ $new->index }}" @if($new->index > 1) class="panel-collapse collapse" aria-expanded="false" style="height: 0px;"@else class="panel-collapse collapse in" @endif>
                            <div class="panel-body">
                                {!! $new->content !!}
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
                    <img src="{{ $imgSrc }}/yaki-tuyendung.jpg" alt="" class="img-responsive">
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
