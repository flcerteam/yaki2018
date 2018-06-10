<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\Admin\ReservationTableRequest as StoreRequest;
use App\Http\Requests\Admin\ReservationTableRequest as UpdateRequest;

use Illuminate\Http\Request;

use App\Models\Admin\ReservationTable;
use App\Models\Admin\RtStatus;
use App\Models\Admin\RtStatusHistory;
use App\Models\Admin\Branch;

class ReservationTableCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Admin\ReservationTable');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/reservation-table');
        $this->crud->setEntityNameStrings(trans('rt.reservation_table'), trans('rt.reservation_tables'));

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // $this->crud->setFromDb();

        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');
        $this->crud->addFields([
            [
                'name'          => 'reservation_no',
                'label'         => trans('rt.reservation_no'),
                'type'          => 'text',
                'attributes'    => [
                    'readonly'  => 'readonly',
                ],
            ],
            [
                'name'          => 'branch_id',
                'label'         => trans('branch.branch'),
                'type'          => 'select2',
                'entity'        => 'branch',
                'attribute'     => 'name',
                'data_value'    => 'value',
                'model'         => "App\Models\Admin\Branch",
                'attributes'    => [
                    'id'        => 'branch',
                ],
            ],
            [
                'name'          => 'rt_type_id',
                'label'         => trans('rt.rt_type'),
                'type'          => 'select2',
                'entity'        => 'type',
                'attribute'     => 'name',
                'data_value'    => 'value',
                'model'         => "App\Models\Admin\RtType",
                'attributes'    => [
                    'id'        => 'rt_type',
                ],
            ],
            [
                'name'      => 'reservation_date',
                'label'     => trans('rt.reservation_date'),
                'type'      => 'date',
            ],
            [
                'name'      => 'reservation_hour',
                'label'     => trans('rt.reservation_hour'),
                'type'      => 'time',
            ],
            [
                'name'      => 'number_of_people',
                'label'     => trans('rt.number_of_people'),
                'type'      => 'number',
            ],
            [
                'name'      => 'note',
                'label'     => trans('rt.note'),
                'type'      => 'textarea',
            ],
        ]);

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);
        $this->crud->addColumns([
            [
                'name'  => 'reservation_no',
                'label' => '#',
            ],
            [
                'label'     => trans('rt.status'),
                'type'      => 'select',
                'name'      => 'status_id',
                'entity'    => 'status',
                'attribute' => 'name',
                'model'     => 'App\Models\Admin\RtStatus',
            ],
            [
                'label'     => trans('member.name'),
                'type'      => 'select',
                'name'      => 'member_id',
                'entity'    => 'member',
                'attribute' => 'name',
                'model'     => 'App\Models\Admin\Member',
            ],
            [
                'label'     => trans('branch.branch'),
                'type'      => 'select',
                'name'      => 'branch_id',
                'entity'    => 'branch',
                'attribute' => 'name',
                'model'     => 'App\Models\Admin\Branch',
            ],
            [
                'label'     => trans('rt.rt_type'),
                'type'      => 'select',
                'name'      => 'rt_type_id',
                'entity'    => 'type',
                'attribute' => 'name',
                'model'     => 'App\Models\Admin\RtType',
            ],
            [
                'name'  => 'reservationDateFm',
                'label' => trans('rt.reservation_date'),
            ],
            [
                'name'  => 'reservation_hour',
                'label' => trans('rt.reservation_hour'),
            ],
        ]);
        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        $this->crud->denyAccess(['create', 'update', 'reorder', 'delete']);
        $this->crud->allowAccess(['show', 'update']);
        $this->crud->removeButton('preview');
        $this->crud->addButtonFromView('line', 'view', 'view', 'beginning');


        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        $this->crud->addFilter(
            [ // select2 filter
                'name' => 'status_id',
                'type' => 'select2',
                'label'=> trans('rt.status')
            ], function() {
                return \App\Models\Admin\RtStatus::all()->pluck('name', 'id')->toArray();
            }, function($value) { // if the filter is active
                  $this->crud->addClause('where', 'status_id', $value);
            });

        $this->crud->addFilter(
            [ // select2 filter
                'name' => 'branch_id',
                'type' => 'select2',
                'label'=> trans('branch.branch')
            ], function() {
                return \App\Models\Admin\Branch::all()->pluck('name', 'id')->toArray();
            }, function($value) { // if the filter is active
                    $this->crud->addClause('where', 'branch_id', $value);
            });

        $this->crud->addFilter(
            [ // select2 filter
                'name' => 'rt_type_id',
                'type' => 'select2',
                'label'=> trans('rt.rt_type')
            ], function() {
                return \App\Models\Admin\RtType::all()->pluck('name', 'id')->toArray();
            }, function($value) { // if the filter is active
                    $this->crud->addClause('where', 'rt_type_id', $value);
            });

        $this->crud->addFilter(
            [
                'type' => 'date_range',
                'name' => 'from_to',
                'label'=> trans('rt.reservation_date')
            ],
            false,
            function($value) { // if the filter is active, apply these constraints
                $dates = json_decode($value);
                    $this->crud->addClause('where', 'reservation_date', '>=', $dates->from);
                    $this->crud->addClause('where', 'reservation_date', '<=', $dates->to);
            });
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        $this->crud->orderBy('reservation_no', 'DESC');
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function show($id)
    {
        $this->crud->hasAccessOrFail('show');

        $rt = $this->crud->getEntry($id);
        $rtStatuses = RtStatus::get();
        $crud = $this->crud;

        return view('admin.rt.view', compact('crud', 'rt', 'rtStatuses'));
    }

    public function updateStatus(Request $request, RtStatusHistory $rtStatusHistory)
    {
        $rtStatusHistory->create($request->except('_token'));

        $this->crud->update($request->input('rt_id'), ['status_id' => $request->input('status_id')]);

        \Alert::success(trans('rt.status_updated'))->flash();

        return redirect()->back();
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request, ReservationTable $rt)
    {
        // Get current rt data
        $rt = $rt->findOrFail($this->crud->request->id);

        // check current status
        if (1 < $rt->status_id)
        {
            \Alert::error(trans('rt.status_error'))->flash();
            return redirect()->back();
        }

        $branchId = $request->input('branch_id');
        $rtTypeId = $request->input('rt_type_id');

        if ($rtTypeId == 1)
        {
            // Get branch info
            $branch = Branch::where('id', '=', $branchId)->first();

            if ($branch->has_buffet_service == 0)
            {
                \Alert::error(trans('rt.buffet_error'))->flash();
                return redirect()->back();
            }
        }
        
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
