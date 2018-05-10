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
			<h3>{{ trans('rt.reservation_no') }} #{{ $rt->reservation_no }} - {{ $rt->member->name }}</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-md-7">
			<div class="box">
			    <div class="box-header with-border">
			      <h3 class="box-title">
		            <span><i class="fa fa-ticket"></i> {{ trans('rt.status') }}</span>
		          </h3>
			    </div>
			    <div class="box-body">
			    	<h4>
							{{ trans('rt.current_status') }} <br><br>
							@if ($rt->status_id == 0)
								<span class="label label-warning">
							@elseif ($rt->status_id == 1)
								<span class="label label-primary">
							@elseif ($rt->status_id == 2)
							  <span class="label label-success">
							@else
							  <span class="label label-default">
							@endif
			    		{{ $rt->status->name }}</span>
			    	</h4>

						<hr>

						<h4>
							{{ trans('rt.status_history') }}
						</h4>
						@if (count($rt->rtStatusHistories) > 0)
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th>{{ trans('rt.status') }}</th>
										<th>{{ trans('rt.date_time') }}</th>
									</tr>
								</thead>
								<tbody>
									@foreach($rt->rtStatusHistories as $rtStatusHistory)
										<tr>
											<td>{{ $rtStatusHistory->status->name }}</td>
											<td>{{ $rtStatusHistory->created_at }}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						@else
							<div class="alert alert-info">
								{{ trans('rt.no_status_history') }}
							</div>
						@endif

						<hr>

						@if (count($rtStatuses) > 0)
							<form action="{{ route('updateRtStatus') }}" method="POST">
								{!! csrf_field() !!}
								<input type="hidden" name="rt_id" value="{{ $rt->id }}">

								<div class="form-group">
									<select name="status_id" id="status_id" class="select2_field" style="width: 100%">
										@foreach($rtStatuses as $rtStatus)
											<option value="{{ $rtStatus->id }}">{{ $rtStatus->name }}</option>
										@endforeach
									</select>
								</div>

								<button type="submit" class="btn btn-primary">{{ trans('rt.update_status') }}</button>
							</form>
						@else
							<div class="alert alert-info">
								{{ trans('rt.no_rt_statuses') }}
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
								<i class="fa fa-user-circle-o"></i> &nbsp; {{ $rt->member->name }} <br/>
								<i class="fa fa-birthday-cake"></i> &nbsp; {{ $rt->member->birth_date }}
								<br>
								@if ($rt->member->gender == 0)	
									<i class="fa fa-mars"></i>  &nbsp; {{ trans('member.male') }}
								@elseif ($rt->member->gender == 1)
									<i class="fa fa-venus"></i>  &nbsp; {{ trans('member.female') }}
								@else
									<i class="fa fa-transgender"></i>  &nbsp; {{ trans('member.other') }}
								@endif
							</div>
							<div class="col-md-6">
								<i class="fa fa-phone-square"></i> &nbsp; {{ $rt->member->phone_number }} <br/>
								<i class="fa fa-envelope"></i> &nbsp; <a href="mailto:{{ $rt->member->email }}">{{ $rt->member->email }}</a>
							</div>
						</div>
					</div>
			</div>

			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">
						<span><i class="fa fa-sticky-note"></i> {{ trans('rt.reservation_info') }}</span>
					</h3>
				</div>

				<div class="box-body">
					<table class="table table-condensed table-hover">
						<tr>
							<td>{{ trans('branch.name') }}</td>
							<td>{{ $rt->branch->name }}</td>
						</tr>
						<tr>
							<td>{{ trans('rt.reservation_date') }}</td>
							<td>{{ $rt->reservation_date }}</td>
						</tr>
						<tr>
							<td>{{ trans('rt.reservation_hour') }}</td>
							<td>{{ $rt->reservation_hour }}</td>
						</tr>
						<tr>
							<td>{{ trans('rt.rt_type') }}</td>
							<td>{{ $rt->type->name }}</td>
						</tr>
						<tr>
							<td>{{ trans('rt.number_of_people') }}</td>
							<td>{{ $rt->number_of_people }}</td>
						</tr>
					</table>
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
			@if (count($rtStatuses) > 0)
				$('.select2_field').select2({theme: "bootstrap"});
			@endif
		});
	</script>
@endsection