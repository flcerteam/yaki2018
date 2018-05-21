@extends('backpack::layout')

@section('content-header')
	<section class="content-header">
	  <h1>
	    <span>{{ $crud->entity_name }}</span>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="{{ url(config('backpack.base.route_prefix'), 'dashboard') }}">{{ trans('backpack::crud.admin') }}</a></li>
	    <li><a href="{{ url($crud->route) }}" class="text-capitalize">{{ $crud->entity_name_plural }}</a></li>
	    <li class="active">{{ trans('backpack::crud.preview') }}</li>
	  </ol>
	</section>
@endsection

@section('content')
	@if ($crud->hasAccess('list'))
		<a href="{{ url($crud->route) }}"><i class="fa fa-angle-double-left"></i> {{ trans('backpack::crud.back_to_all') }} <span>{{ $crud->entity_name_plural }}</span></a><br><br>
	@endif

	<div class="row">
		<div class="col-md-12 well">
			<h3>{{ trans('order.invoice_no') }} #{{ $order->invoice_no }} - {{ $order->member->name }}</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-md-7">
			<div class="box">
			    <div class="box-header with-border">
			      <h3 class="box-title">
		            <span><i class="fa fa-ticket"></i> {{ trans('order.status') }}</span>
		          </h3>
			    </div>
			    <div class="box-body">
			    	<h4>
							{{ trans('order.current_status') }} <br><br>
							@if ($order->status_id == 0)
								<span class="label label-warning">
							@elseif ($order->status_id == 1)
								<span class="label label-primary">
							@elseif ($order->status_id == 2)
								<span class="label label-info">
							@elseif ($order->status_id == 3)
							  	<span class="label label-success">
							@elseif ($order->status_id == 4)
								<span class="label label-danger">
							@else
							  	<span class="label label-default">
							@endif
			    		{{ $order->status->name }}</span>
			    	</h4>

						<hr>

						<h4>
							{{ trans('order.status_history') }}
						</h4>
						@if (count($order->orderStatusHistories) > 0)
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th>{{ trans('order.status') }}</th>
										<th>{{ trans('order.date_time') }}</th>
									</tr>
								</thead>
								<tbody>
									@foreach($order->orderStatusHistories as $orderStatusHistory)
										<tr>
											<td>{{ $orderStatusHistory->status->name }}</td>
											<td>{{ $orderStatusHistory->created_at }}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						@else
							<div class="alert alert-info">
								{{ trans('order.no_status_history') }}
							</div>
						@endif

						<hr>

						@if (count($orderStatuses) > 0)
							<form action="{{ route('updateOrderStatus') }}" method="POST">
								{!! csrf_field() !!}
								<input type="hidden" name="order_id" value="{{ $order->id }}">

								<div class="form-group">
									<select name="status_id" id="status_id" class="select2_field" style="width: 100%">
										@foreach($orderStatuses as $orderStatus)
											<option value="{{ $orderStatus->id }}">{{ $orderStatus->name }}</option>
										@endforeach
									</select>
								</div>

								<button type="submit" class="btn btn-primary">{{ trans('order.update_status') }}</button>
							</form>
						@else
							<div class="alert alert-info">
								{{ trans('order.no_order_statuses') }}
							</div>
						@endif
					</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="box">
			    <div class="box-header with-border">
			      <h3 class="box-title">
		            <span><i class="fa fa-user"></i> {{ trans('member.member') }}</span>
		          </h3>
					</div>

					<div class="box-body">
						<h4>{{ trans('member.member_info') }}</h4>
						<div class="col-md-12 well">
							<div class="col-md-6">
								<i class="fa fa-user-circle-o"></i> &nbsp; {{ $order->member->name }} <br/>
								<i class="fa fa-birthday-cake"></i> &nbsp; {{ $order->member->birthDateFm }}
								<br>
								@if ($order->member->gender == 0)	
									<i class="fa fa-mars"></i>  &nbsp; {{ trans('member.male') }}
								@elseif ($order->member->gender == 1)
									<i class="fa fa-venus"></i>  &nbsp; {{ trans('member.female') }}
								@else
									<i class="fa fa-transgender"></i>  &nbsp; {{ trans('member.other') }}
								@endif
							</div>
							<div class="col-md-6">
								<i class="fa fa-phone-square"></i> &nbsp; {{ $order->member->phone_number }} <br/>
								<i class="fa fa-envelope"></i> &nbsp; <a href="mailto:{{ $order->member->email }}">{{ $order->member->email }}</a>
							</div>
						</div>
					</div>
			</div>

			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">
						<span><i class="fa fa-sticky-note"></i> {{ trans('order.order_info') }}</span>
					</h3>
				</div>

				<div class="box-body">
					<table class="table table-condensed table-hover">
						<tr>
							<td>
								{{ trans('order.order_date_time') }}
							</td>
							<td>
								{{ $order->invoice_date }}
							</td>
						</tr>
						<tr>
							<td>
								{{ trans('order.shipping_address') }}
							</td>
							<td>
								{{ $order->shipping_address }}
							</td>
						</tr>
						<tr>
							<td>
								{{ trans('order.comment') }}
							</td>
							<td>
								{{ $order->comment }}
							</td>
						</tr>
						<tr>
							<td>
								{{ trans('order.total') }}
							</td>
							<td>
								{{ $order->total() . trans('order.vnd_symbol') }}
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">
						<span><i class="fa fa-shopping-cart"></i> {{ trans('order.order_detail') }}</span>
					</h3>
				</div>

				<div class="box-body">
					<div class="col-md-12">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>{{ trans('product.sku') }}</th>
									<th>{{ trans('product.name') }}</th>
									<th class="text-right">{{ trans('order.quantity') }}</th>
									<th class="text-right">{{ trans('order.price') }}</th>
									<th class="text-right">{{ trans('order.sub_total') }}</th>
								</tr>
							</thead>
							<tbody>
								@foreach($order->details as $detail)
									<tr>
										<td>
											{{ $detail->sku }}
										</td>
										<td>
											{{ $detail->name }}
										</td>
										<td class="text-right">
											{{ $detail->quantity() }}
										</td>
										<td class="text-right">
											{{ $detail->price() }}
										</td>
										<td class="text-right">
											{{ $detail->subTotal() . trans('order.vnd_symbol') }}
										</td>
									</tr>
								@endforeach
								<tr>
									<th colspan="4" class="text-right">
										{{ trans('order.total') }}
									</th>
									<td class="text-right">
										{{ $order->total() . trans('order.vnd_symbol') }}
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('after_styles')
	<link rel="stylesheet" href="{{ asset('vendor/backpack/crud/css/crud.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/backpack/crud/css/show.css') }}">

	<!-- include select2 css-->
	<link href="{{ asset('vendor/adminlte/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

	<!-- Select 2 Bootstrap theme -->
	<link href="{{ asset('css/select2-bootstrap-min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('after_scripts')
	<script src="{{ asset('vendor/backpack/crud/js/crud.js') }}"></script>
	<script src="{{ asset('vendor/backpack/crud/js/show.js') }}"></script>

	<!-- include select2 js -->
    <script src="{{ asset('vendor/adminlte/bower_components/select2/dist/js/select2.min.js') }}"></script>

	<script>
		$(document).ready(function () {
			@if (count($orderStatuses) > 0)
				$('.select2_field').select2({theme: "bootstrap"});
			@endif
		});
	</script>
@endsection