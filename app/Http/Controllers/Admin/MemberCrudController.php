<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\Admin\MemberRequest as StoreRequest;
use App\Http\Requests\Admin\MemberRequest as UpdateRequest;

class MemberCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Admin\Member');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/member');
        $this->crud->setEntityNameStrings(trans('member.member'), trans('member.members'));

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
                'name'      => 'name',
                'label'     => trans('member.name'),
                'type'      => 'text',
            ],
            [
                'name'      => 'birth_date',
                'label'     => trans('member.birth_date'),
                'type'      => 'date',
            ],
            [
                'name'      => 'gender',
                'label'     => trans('member.gender'),
                'type'      => 'select_from_array',
                'options'   => [
                    '0'     => trans('member.male'),
                    '1'     => trans('member.female'),
                    '2'     => trans('member.other'),
                ],
            ],
            [
                'name'      => 'phone_number',
                'label'     => trans('member.phone_number'),
                'hint'      => trans('member.hint_phone_number'),
                'type'      => 'text',

            ],
            [
                'name'      => 'email',
                'label'     => trans('member.email'),
                'type'      => 'email',
            ],
            [
                'name'      => 'address',
                'label'     => trans('member.address'),
                'type'      => 'textarea',
            ],
            [
                'name'      => 'member_point',
                'label'     => trans('member.member_point'),
                'type'      => 'number',
            ],
            [
                'label' => trans('member.member_type'),
                'type' => 'select2',
                'name' => 'member_type_id',
                'entity' => 'memberType',
                'attribute' => 'name',
                'model' => "App\Models\Admin\MemberType"
            ],
            [
                'name'      => 'note',
                'label'     => trans('member.note'),
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
                'name'  => 'name',
                'label' => trans('member.name'),
            ],
            [
                'name'  => 'name',
                'label' => trans('member.name'),
            ],
            [
                'name'  => 'birth_date_fm',
                'label' => trans('member.birth_date'),
            ],
            [
                'name'  => 'gender',
                'label' => trans('member.gender'),
                'type'  => 'select_from_array',
                'options'   => [
                    '0'     => trans('member.male'),
                    '1'     => trans('member.female'),
                    '2'     => trans('member.other'),
                ],
            ],
            [
                'name'  => 'phone_number',
                'label' => trans('member.phone_number'),
            ],
            [
                'name'  => 'email',
                'label' => trans('member.email'),
            ],
            [
                'label' => trans('member.member_type'),
                'type' => 'select',
                'name' => 'member_type_id',
                'entity' => 'memberType',
                'attribute' => 'name',
                'model' => "App\Models\Admin\MemberType"
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
        $this->crud->allowAccess(['list', 'create', 'update', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

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
                'name' => 'member_type_id',
                'type' => 'select2',
                'label'=> trans('member.member_type')
            ], function() {
                return \App\Models\Admin\MemberType::all()->pluck('name', 'id')->toArray();
            }, function($value) { // if the filter is active
                  $this->crud->addClause('where', 'member_type_id', $value);
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
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function store(StoreRequest $request)
    {
        $requestData = $request->all();

        if ($requestData['member_point'] == null) {
            $request->merge(['member_point' => '0']);
        }

        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $requestData = $request->all();
    
        if ($requestData['member_point'] == null) {
            $request->merge(['member_point' => '0']);
        }

        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
