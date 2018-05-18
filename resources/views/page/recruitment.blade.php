@extends('master')
@section('content')

<div class="section"></div>
<div id="recruitment" class="section">
    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-9">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                    <div class="row">
                                        <span class="col-md-1" style="color: #d9d9d9;font-size: 18px;">01</span>
                                        <span class="col-md-9" style="height: 100%;">
                                            Collapsible Group 1
                                        </span>
                                        <span class="col-md-2 hidden-xs" style="text-align: right;font-size: 12px;font-style: italic;">13/09/2016</span>
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Body
                            </div>
                        </div>
                    </div>            
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
            </div>
        </div>
    </div>
</div>

@endsection
