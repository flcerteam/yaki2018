<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\Admin\BuffetProductRequest as StoreRequest;
use App\Http\Requests\Admin\BuffetProductRequest as UpdateRequest;

use App\Models\Admin\BuffetProduct;
use App\Models\Admin\BuffetProductImage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class BuffetProductCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Admin\BuffetProduct');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/buffet-product');
        $this->crud->setEntityNameStrings(trans('product.buffet'), trans('product.buffet'));

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
        $this->crud->addField([
            'name'      => 'sku',
            'label'     => trans('product.buffet_id'),
            'type'      => 'text',

            // TAB
            'tab'   => trans('product.buffet_tab')
        ], 'create');

        $this->crud->addField([
            'name'          => 'sku',
            'label'         => trans('product.buffet_id'),
            'type'          => 'text',
            'attributes'    => [
                'readonly'  => 'readonly',
            ],

            // TAB
            'tab'   => trans('product.buffet_tab')
        ], 'update');

        $this->crud->addFields([
            [
                'name'      => 'name',
                'label'     => trans('product.buffet_name'),
                'type'      => 'text',

                // TAB
                'tab'       => trans('product.buffet_tab')
            ],
            [
                'name'      => 'description',
                'label'     => trans('product.description'),
                'type'      => 'textarea',

                // TAB
                'tab'       => trans('product.buffet_tab')
            ],
            [
                'name'      => 'branches',
                'label'     => trans('branch.branches'),
                'hint'      => trans('product.hint_branch'),
                'type'      => 'select2_multiple',
                'entity'    => 'branches',
                'attribute' => 'name',
                'model'     => "App\Models\Admin\Branch",
                'pivot'     => true,

                // TAB
                'tab'       => trans('product.buffet_tab'),
            ],
            [
                'name'      => 'status',
                'label'     => trans('common.status'),
                'type'      => 'select_from_array',
                'options'   => [
                    '0'     => trans('common.active'),
                    '1'     => trans('common.inactive')
                ],

                // TAB
                'tab'       => trans('product.buffet_tab'),
            ],
            [
                'label'     => trans('ribbon.name'),
                'type'      => 'select2',
                'name'      => 'ribbon_id',
                'entity'    => 'ribbon',
                'attribute' => 'name',
                'model'     => "App\Models\Admin\Ribbon",
                //'hint'      => trans('ribbon.ribbon_content_tip'),

                // TAB
                'tab'       => trans('product.ribbon_tab'),
            ],
            [
                'name'  => 'ribbon_content',
                'label' => trans('ribbon.ribbon_content'),
                'type'  => 'text',

                // TAB
                'tab'       => trans('product.ribbon_tab'),
            ]
        ]);

        $this->crud->addField([
            'name'          => 'dropzone',
            'type'          => 'dropzone',
            'disk'          => config('imageupload.buffet_product_disk'), // disk where images will be uploaded
            'mimes'         => ['image/*'],
            'filesize'      => config('imageupload.file_size'), // maximum file size in MB
            'uploadRoute'   => route('uploadBuffetProductImages'),
            'reorderRoute'  => route('reorderBuffetProductImages'),
            'deleteRoute'   => route('deleteBuffetProductImage'),
            'simplePathUrl' => url(config('filesystems.disks.buffet_products.simple_path')),
            // TAB
            'tab'           => trans('product.buffet_images_tab'),
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
                'name'  => 'sku',
                'label' => trans('product.buffet_id'),
            ],
            [
                'name'  => 'name',
                'label' => trans('product.buffet_name'),
            ],
            [
                'label'     => trans('ribbon.name'),
                'type'      => 'select',
                'name'      => 'ribbon_id',
                'entity'    => 'ribbon',
                'attribute' => 'name',
                'model'     => "App\Models\Admin\Ribbon",
            ],
            [
                'name'  => 'ribbon_content',
                'label' => trans('ribbon.ribbon_content'),
            ],
            [
                'name'      => 'status',
                'label'     => trans('common.status'),
                'type'      => 'boolean',
                'options'   => [
                    0 => trans('common.active'),
                    1 => trans('common.inactive')
                    
                ],
            ]
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
                'name' => 'ribbon_id',
                'type' => 'select2',
                'label'=> trans('ribbon.name')
            ], function() {
                return \App\Models\Admin\Ribbon::all()->pluck('name', 'id')->toArray();
            }, function($value) { // if the filter is active
                  $this->crud->addClause('where', 'ribbon_id', $value);
            });

        $this->crud->addFilter([ // select2 filter
            'name' => 'status',
            'type' => 'select2',
            'label'=> trans('common.status')
            ], function() {
                return [
                    0 => trans('common.active'),
                    1 => trans('common.inactive')
                ];
            }, function($value) { // if the filter is active
                $this->crud->addClause('where', 'status', $value);
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

    public function ajaxUploadProductImages(Request $request, BuffetProduct $product)
    {
        $images = [];
        $disk   = config('imageupload.buffet_product_disk');

        if ($request->file && $request->id) {
            $product = $product->find($request->id);
            $productImages = $product->images->toArray();

            if ($productImages) {
                $ord = count($productImages);
            } else {
                $ord = 0;
            }

            foreach ($request->file as $file) {
                $file_content = file_get_contents($file);
                $filename = md5(uniqid('', true)).'.'.$file->extension();

                Storage::disk($disk)->put($filename, $file_content);

                $images[] = [
                    'buffet_product_id' => $product->id,
                    'name'              => $filename,
                    'order'             => $ord++
                ];
            }

            $product->images()->insert($images);
            return response()->json($product->load('images')->images->toArray());
        }
    }

    public function ajaxReorderProductImages(Request $request, BuffetProductImage $productImage)
    {
        if ($request->order) {
            foreach ($request->order as $position => $id) {
                DB::table('buffet_product_images')->where('id', $id)->update(['order' => $position]);
            }
        }
    }

    public function ajaxDeleteProductImage(Request $request, BuffetProductImage $productImage)
    {
        $disk = config('imageupload.buffet_product_disk');

        if ($request->id) {
            $productImage = $productImage->find($request->id);

            if (Storage::disk($disk)->has($productImage->name)) {
                if (Storage::disk($disk)->delete($productImage->name)) {
                    $productImage->delete();

                    return response()->json(['success' => true, 'message' => trans('common.image_deleted')]);
                }
            }

            return response()->json(['success' => false, 'message' => trans('common.image_not_found')]);
        }
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
