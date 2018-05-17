<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\Admin\ProductRequest as StoreRequest;
use App\Http\Requests\Admin\ProductRequest as UpdateRequest;

use App\Models\Admin\Product;
use App\Models\Admin\ProductImage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Admin\Product');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/product');
        $this->crud->setEntityNameStrings(trans('product.product'), trans('product.products'));

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
            'label'     => trans('product.sku'),
            'type'      => 'text',

            // TAB
            'tab'   => trans('product.general_tab')
        ], 'create');

        $this->crud->addField([
            'name'          => 'sku',
            'label'         => trans('product.sku'),
            'type'          => 'text',
            'attributes'    => [
                'readonly'  => 'readonly',
            ],

            // TAB
            'tab'   => trans('product.general_tab')
        ], 'update');

        $this->crud->addFields([
            [
                'name'      => 'name',
                'label'     => trans('product.name'),
                'type'      => 'text',

                // TAB
                'tab'       => trans('product.general_tab')
            ],
            [
                'name'      => 'description',
                'label'     => trans('product.description'),
                'type'      => 'textarea',

                // TAB
                'tab'       => trans('product.general_tab')
            ],
            [
                'name'      => 'categories',
                'label'     => trans('category.categories'),
                'hint'      => trans('product.hint_category'),
                'type'      => 'select2_multiple',
                'entity'    => 'categories',
                'attribute' => 'name',
                'model'     => "App\Models\Admin\Category",
                'pivot'     => true,

                // TAB
                'tab'       => trans('product.general_tab'),
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
                'tab'       => trans('product.general_tab'),
            ],
            [
                'name'          => 'unit_id',
                'label'         => trans('unit.unit'),
                'type'          => 'select2_unit',
                'entity'        => 'unit',
                'attribute'     => 'name',
                'data_value'    => 'value',
                'model'         => "App\Models\Admin\Unit",
                'attributes'    => [
                    'id'        => 'unit',
                ],

                // TAB
                'tab'       => trans('product.sale_tab'),
            ],
            [
                'name'  => 'number_of_unit',
                'label' => trans('product.number_of_unit'),
                'type'  => 'number',
                'attributes' => ["step" => "any"], // allow decimals

                    // TAB
                'tab'   => trans('product.sale_tab'),
            ],
            [
                'name'  => 'price',
                'label' => trans('product.price'),
                'type'  => 'number',

                    // TAB
                'tab'   => trans('product.sale_tab'),
            ]
        ]);

        $this->crud->addField([
            'name'          => 'dropzone',
            'type'          => 'dropzone',
            'disk'          => config('imageupload.product_disk'), // disk where images will be uploaded
            'mimes'         => ['image/*'],
            'filesize'      => config('imageupload.file_size'), // maximum file size in MB
            'uploadRoute'   => route('uploadProductImages'),
            'reorderRoute'  => route('reorderProductImages'),
            'deleteRoute'   => route('deleteProductImage'),
            'simplePathUrl' => url(config('filesystems.disks.products.simple_path')),
            // TAB
            'tab'           => trans('product.product_images_tab'),
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
                'label' => trans('product.sku'),
            ],
            [
                'name'  => 'name',
                'label' => trans('product.name'),
            ],
            [
                'name'      => 'categories',
                'type'      => "select_multiple",
                'label'     => trans('category.categories'),
                'entity'    => 'categories',
                'attribute' => "name",
                'model'     => "App\Models\Admin\Category",
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
        $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);
        $this->crud->allowAccess(['list', 'create', 'update', 'delete']);
        

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
        // $this->crud->enableAjaxTable();

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

    public function ajaxUploadProductImages(Request $request, Product $product)
    {
        $images = [];
        $disk   = config('imageupload.product_disk');

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
                    'product_id'    => $product->id,
                    'name'          => $filename,
                    'order'         => $ord++
                ];
            }

            $product->images()->insert($images);
            return response()->json($product->load('images')->images->toArray());
        }
    }

    public function ajaxReorderProductImages(Request $request, ProductImage $productImage)
    {
        if ($request->order) {
            foreach ($request->order as $position => $id) {
                $productImage->find($id)->update(['order' => $position]);
            }
        }
    }

    public function ajaxDeleteProductImage(Request $request, ProductImage $productImage)
    {
        $disk = config('imageupload.product_disk');

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
