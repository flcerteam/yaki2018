@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.dashboard') }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection

@push('css')
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="orange">
                            <i class="material-icons">info_outline</i>
                        </div>
                        <div class="card-content">
                            <p class="category">{{ trans('dashboard.rt') }}</p>
                            <h3 class="title">{{ $reservationTable->count() }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i> {{ trans('dashboard.rt_waiting') }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">shopping_cart</i>
                        </div>
                        <div class="card-content">
                            <p class="category">{{ trans('dashboard.order') }}</p>
                            <h3 class="title">{{ $order->count() }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i> {{ trans('dashboard.order_waiting') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if (count($rtToday) > 0 || count($rtTomorrow) > 0)
            <div class="row">
                @if (count($rtToday) > 0)
                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                            <span><i class="fa fa-info-circle"></i> {{ trans('dashboard.rt_today_confirmed') }} [{{ $todayFm }}]</span>
                            </h3>
                        </div>

                        <div class="box-body">
                            <div class="col-md-12">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ trans('dashboard.rt_time') }}</th>
                                            <th>{{ trans('dashboard.rt_type') }}</th>
                                            <th>{{ trans('dashboard.nop') }}</th>
                                            <th>{{ trans('dashboard.member') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $branchId = ''; ?>
                                        @foreach($rtToday as $todayDtl)
                                            @if($branchId == '' || $branchId != $todayDtl->branch_id)
                                                <tr>
                                                    <td colspan="5" bgcolor="#FEA01C">
                                                        {{ $todayDtl->branch->name }}
                                                    </td>
                                                </tr>
                                                <?php $branchId = $todayDtl->branch_id; ?>
                                            @endif
                                            <tr>
                                                <td>
                                                    {{ $todayDtl->reservation_no }}
                                                </td>
                                                <td>
                                                    {{ $todayDtl->reservation_hour }}
                                                </td>
                                                <td>
                                                    {{ $todayDtl->type->name }}
                                                </td>
                                                <td>
                                                    {{ $todayDtl->number_of_people }}
                                                </td>
                                                <td>
                                                    {{ $todayDtl->member->name }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if (count($rtTomorrow) > 0)
                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                <span><i class="fa fa-info-circle"></i> {{ trans('dashboard.rt_tomorrow_confirmed') }} [{{ $tomorrowFm }}]</span>
                            </h3>
                        </div>

                        <div class="box-body">
                            <div class="col-md-12">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ trans('dashboard.rt_time') }}</th>
                                            <th>{{ trans('dashboard.rt_type') }}</th>
                                            <th>{{ trans('dashboard.nop') }}</th>
                                            <th>{{ trans('dashboard.member') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $branchId = ''; ?>
                                        @foreach($rtTomorrow as $tomorrowDtl)
                                            @if($branchId == '' || $branchId != $tomorrowDtl->branch_id)
                                                <tr>
                                                    <td colspan="5" bgcolor="#FEA01C">
                                                        {{ $tomorrowDtl->branch->name }}
                                                    </td>
                                                </tr>
                                                <?php $branchId = $tomorrowDtl->branch_id; ?>
                                            @endif
                                            <tr>
                                                <td>
                                                    {{ $tomorrowDtl->reservation_no }}
                                                </td>
                                                <td>
                                                    {{ $tomorrowDtl->reservation_hour }}
                                                </td>
                                                <td>
                                                    {{ $tomorrowDtl->type->name }}
                                                </td>
                                                <td>
                                                    {{ $tomorrowDtl->number_of_people }}
                                                </td>
                                                <td>
                                                    {{ $tomorrowDtl->member->name }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            @endif
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush