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
			<h2>{{ trans('rt.reservation_no') }} #{{ $rt->reservation_no }} - {{ $rt->member->name }}</h2>
		</div>
	</div>
@endsection

@section('after_styles')
	<link rel="stylesheet" href="{{ asset('vendor/backpack/crud/css/crud.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/backpack/crud/css/show.css') }}">

	<!-- include select2 css-->
	<link href="{{ asset('vendor/adminlte/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

	<!-- Select 2 Bootstrap theme -->
	<link href="{{ asset('css/select2-bootstrap-min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('after_scripts')
	<script src="{{ asset('vendor/backpack/crud/js/crud.js') }}"></script>
	<script src="{{ asset('vendor/backpack/crud/js/show.js') }}"></script>

	<!-- include select2 js -->
    <script src="{{ asset('vendor/adminlte/plugins/select2/select2.min.js') }}"></script>

	<script>
		$(document).ready(function () {
			@if (count($rtStatuses) > 0)
				$('.select2_field').select2({theme: "bootstrap"});
			@endif
		});
	</script>
@endsection