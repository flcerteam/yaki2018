<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Branch;
use App\Models\Admin\BranchImage;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\Admin\BranchRequest as StoreRequest;
use App\Http\Requests\Admin\BranchUpdateRequest as UpdateRequest;

class BranchCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Admin\Branch');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/branch');
        $this->crud->setEntityNameStrings(trans('branch.branch'), trans('branch.branches'));

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
              'name'  => 'name',
              'label' => trans('branch.name'),
              'type'  => 'text',
              // TAB
              'tab'   => trans('branch.general_tab'),
            ],
            [
                'name'  => 'slug',
                'type'  => 'hidden',
                // TAB
                'tab'   => trans('branch.general_tab'),
              ],
            [
              'name'  => 'description',
              'label' => trans('branch.description'),
              'type'  => 'textarea',
              // TAB
              'tab'   => trans('branch.general_tab'),
            ],
            [
              'name'  => 'address',
              'label' => trans('branch.address'),
              'type'  => 'text',
              // TAB
              'tab'   => trans('branch.general_tab'),
            ],
            [
              'name'  => 'contact_name',
              'label' => trans('branch.contact_name'),
              'type'  => 'text',
              // TAB
              'tab'   => trans('branch.general_tab'),
            ],
            [
              'name'  => 'phone_number',
              'label' => trans('branch.phone_number'),
              'type'  => 'text',
              // TAB
              'tab'   => trans('branch.general_tab'),
            ],
            [
              'name'  => 'email',
              'label' => trans('branch.email'),
              'type'  => 'email',
              // TAB
              'tab'   => trans('branch.general_tab'),
            ],
            [
              'name'  => 'open_hour',
              'label' => trans('branch.open_hour'),
              'type'  => 'time',
              // TAB
              'tab'   => trans('branch.general_tab'),
            ],
            [
              'name'  => 'close_hour',
              'label' => trans('branch.close_hour'),
              'type'  => 'time',
              // TAB
              'tab'   => trans('branch.general_tab'),
            ],
            [
              'name'  => 'location',
              'label' => trans('branch.location'),
              'type'  => 'text',
              // TAB
              'tab'   => trans('branch.general_tab'),
            ],
            [
              'name'  => 'status',
              'label' => trans('common.status'),
              'type'  => 'select_from_array',
              'options' => [
                  '0' => trans('common.active'),
                  '1' => trans('common.inactive'),
              ],
              // TAB
              'tab'   => trans('branch.general_tab'),
            ],
            [
                'name'  => 'has_buffet_service',
                'label' => trans('branch.buffet_service'),
                'type'  => 'select_from_array',
                'options' => [
                    '0' => trans('branch.no'),
                    '1' => trans('branch.yes'),
                ],
                // TAB
                'tab'   => trans('branch.buffet_tab'),
            ],
            [
                'name'  => 'buffet_price',
                'label' => trans('branch.buffet_price'),
                'type'  => 'number',

                // TAB
                'tab'   => trans('branch.buffet_tab'),
            ],
        ]);

        $this->crud->addField([
            'name'          => 'dropzone',
            'type'          => 'dropzone',
            'disk'          => config('imageupload.branch_disk'), // disk where images will be uploaded
            'mimes'         => ['image/*'],
            'filesize'      => config('imageupload.file_size'), // maximum file size in MB
            'uploadRoute'   => route('uploadBranchImages'),
            'reorderRoute'  => route('reorderBranchImages'),
            'deleteRoute'   => route('deleteBranchImage'),
            'simplePathUrl' => url(config('filesystems.disks.branches.simple_path')),
            // TAB
            'tab'           => trans('branch.branch_images_tab'),
        ], 'update');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);
        $this->crud->addColumns([
            [
              'name'    => 'name',
              'label'   => trans('branch.name'),
            ],
            [
              'name'    => 'status',
              'label'   => trans('common.status'),
              'type'    => 'boolean',
              'options' => [
                  0 => trans('common.active'),
                  1 => trans('common.inactive')
              ]
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

    public function ajaxUploadBranchImages(Request $request, Branch $branch)
    {
        $images = [];
        $disk   = config('imageupload.branch_disk');

        if ($request->file && $request->id) {
            $branch = $branch->find($request->id);
            $branchImages = $branch->images->toArray();

            if ($branchImages) {
                $ord = count($branchImages);
            } else {
                $ord = 0;
            }

            foreach ($request->file as $file) {
                $file_content = file_get_contents($file);
                $filename = md5(uniqid('', true)).'.'.$file->extension();

                Storage::disk($disk)->put($filename, $file_content);

                $images[] = [
                    'branch_id'     => $branch->id,
                    'name'          => $filename,
                    'order'         => $ord++
                ];
            }

            $branch->images()->insert($images);
            return response()->json($branch->load('images')->images->toArray());
        }
    }

    public function ajaxReorderBranchImages(Request $request, BranchImage $branchImage)
    {
        if ($request->order) {
            foreach ($request->order as $position => $id) {
                DB::table('branch_images')->where('id', $id)->update(['order' => $position]);
            }
        }
    }

    public function ajaxDeleteBranchImage(Request $request, BranchImage $branchImage)
    {
        $disk = config('imageupload.branch_disk');

        if ($request->id) {
            $branchImage = $branchImage->find($request->id);

            if (Storage::disk($disk)->has($branchImage->name)) {
                if (Storage::disk($disk)->delete($branchImage->name)) {
                    $branchImage->delete();

                    return response()->json(['success' => true, 'message' => trans('common.image_deleted')]);
                }
            }

            return response()->json(['success' => false, 'message' => trans('common.image_not_found')]);
        }
    }

    public function store(StoreRequest $request)
    {
        $requestData = $request->all();
        $request->merge(['slug' => str_slug($requestData['name'], '-')]);
        
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $requestData = $request->all();
        $request->merge(['slug' => str_slug($requestData['name'], '-')]);

        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
