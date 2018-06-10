@extends('backpack::layout')

@section('header')
<section class="content-header">
    <h1>
        <span class="text-capitalize">{{ $crud->entity_name_plural }}</span>
        <small>{{ trans('category.reorder') }}.</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix'), 'dashboard') }}">{{ trans('backpack::crud.admin') }}</a></li>
        <li><a href="{{ url($crud->route) }}" class="text-capitalize">{{ $crud->entity_name_plural }}</a></li>
        <li class="active">{{ trans('category.reorder') }}</li>
    </ol>
</section>
@endsection

@section('content')
<?php
function tree_element($entry, $key, $all_entries, $crud)
{
    if (!isset($entry->tree_element_shown)) {
        // mark the element as shown
        $all_entries[$key]->tree_element_shown = true;
        $entry->tree_element_shown = true;

        // show the tree element
        echo '<li id="list_'.$entry->getKey().'">';
        echo '<div><span class="disclose"><span></span></span>'.object_get($entry, $crud->reorder_label).'</div>';

        // see if this element has any children
        $children = [];
        foreach ($all_entries as $key => $subentry) {
            if ($subentry->parent_id == $entry->getKey()) {
                $children[] = $subentry;
            }
        }

        $children = collect($children)->sortBy('lft');

        // if it does have children, show them
        if (count($children)) {
            echo '<ol>';
            foreach ($children as $key => $child) {
                $children[$key] = tree_element($child, $child->getKey(), $all_entries, $crud);
            }
            echo '</ol>';
        }
        echo '</li>';
    }

    return $entry;
}

?>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
    @if ($crud->hasAccess('list'))
        <a href="{{ url($crud->route) }}"><i class="fa fa-angle-double-left"></i> {{ trans('backpack::crud.back_to_all') }} <span>{{ $crud->entity_name_plural }}</span></a><br><br>
    @endif

        <!-- Default box -->
        <div class="box">

            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('category.reorder') }}</h3>
            </div>

            <div class="box-body">

                <p>{{ trans('backpack::crud.reorder_text') }}</p>

                <ol class="sortable">
                <?php
                    foreach ($categoryProducts as $detail) {
                        echo '<li id="'.$detail->product_id.'" category_id="'.$detail->category_id.'" class="mjs-nestedSortable-leaf"><div class="ui-sortable-handle"><span class="disclose"></span><i class="fa fa-sort" aria-hidden="true"></i>&nbsp;&nbsp;'.$detail->sku. ' - '. $detail->name.'</div></li>';
                    }
                ?>
                </ol>

                <button id="toArray" class="btn btn-success ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-save"></i> {{ trans('backpack::crud.save') }}</span></button>

            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
@endsection


@section('after_styles')
<link rel="stylesheet" href="{{ asset('vendor/backpack/nestedSortable/nestedSortable.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/backpack/crud/css/crud.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/backpack/crud/css/reorder.css') }}">
@endsection

@section('after_scripts')
<script src="{{ asset('vendor/backpack/crud/js/crud.js') }}"></script>
<script src="{{ asset('vendor/backpack/crud/js/reorder.js') }}"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js" type="text/javascript"></script>
<script src="{{ asset('vendor/backpack/nestedSortable/jquery.mjs.nestedSortable2.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {

    // initialize the nested sortable plugin
    $('.sortable').nestedSortable({
        forcePlaceholderSize: true,
        handle: 'div',
        helper: 'clone',
        items: 'li',
        opacity: .6,
        placeholder: 'placeholder',
        revert: 250,
        tabSize: 25,
        tolerance: 'pointer',
        toleranceElement: '> div',
        maxLevels: 1,
        isTree: true,
        expandOnHover: 700,
        startCollapsed: false
    });

    $('.disclose').on('click', function() {
        $(this).closest('li').toggleClass('mjs-nestedSortable-collapsed').toggleClass('mjs-nestedSortable-expanded');
    });

    $('#toArray').click(function(e){
        var arrData = [];
        var order = 0;
        $('ol').find('.mjs-nestedSortable-leaf').each(function() {
            var data = {
                product_id : $(this).attr('id'),
                category_id : $(this).attr('category_id'),
                order : order++
            };

            arrData.push(data);
        });

        // log it
        console.log(arrData);

        // send it with POST
        $.ajax({
            url: '{{ Request::url() }}',
            type: 'POST',
            data: { tree: arrData }
        })
        .done(function() {
            //console.log("success");
            new PNotify({
                        title: "{{ trans('backpack::crud.reorder_success_title') }}",
                        text: "{{ trans('backpack::crud.reorder_success_message') }}",
                        type: "success"
                    });
          })
        .fail(function() {
            //console.log("error");
            new PNotify({
                        title: "{{ trans('backpack::crud.reorder_error_title') }}",
                        text: "{{ trans('backpack::crud.reorder_error_message') }}",
                        type: "danger"
                    });
          })
        .always(function() {
            console.log("complete");
        });

    });

    $.ajaxPrefilter(function(options, originalOptions, xhr) {
        var token = $('meta[name="csrf_token"]').attr('content');

        if (token) {
            return xhr.setRequestHeader('X-XSRF-TOKEN', token);
        }
    });

});
</script>
@endsection