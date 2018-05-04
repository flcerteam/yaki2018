<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Forms
    'save_action_save_and_new' => 'Lưu & Thêm mới',
    'save_action_save_and_edit' => 'Lưu & Chỉnh sửa',
    'save_action_save_and_back' => 'Lưu & Trở về',
    'save_action_changed_notification' => 'Default behaviour after saving has been changed.',

    // Create form
    'add'                 => 'Thêm mới',
    'back_to_all'         => 'Quay về',
    'cancel'              => 'Thoát',
    'add_a_new'           => 'Thêm mới ',

    // Edit form
    'edit'                 => 'Chỉnh sửa',
    'save'                 => 'Lưu',

    // Revisions
    'revisions'            => 'Revisions',
    'no_revisions'         => 'No revisions found',
    'created_this'         => 'created this',
    'changed_the'          => 'changed the',
    'restore_this_value'   => 'Restore this value',
    'from'                 => 'từ',
    'to'                   => 'đến',
    'undo'                 => 'Undo',
    'revision_restored'    => 'Revision successfully restored',
    'guest_user'           => 'Guest User',

    // Translatable models
    'edit_translations' => 'EDIT TRANSLATIONS',
    'language'          => 'Language',

    // CRUD table view
    'all'                       => 'All ',
    'in_the_database'           => 'in the database',
    'list'                      => 'Danh sách',
    'actions'                   => 'Xử lý',
    'preview'                   => 'Preview',
    'delete'                    => 'Xóa',
    'admin'                     => 'Admin',
    'details_row'               => 'This is the details row. Modify as you please.',
    'details_row_loading_error' => 'There was an error loading the details. Please retry.',

        // Confirmation messages and bubbles
        'delete_confirm'                              => 'Bạn có muốn xóa?',
        'delete_confirmation_title'                   => 'Đã xóa',
        'delete_confirmation_message'                 => 'The item has been deleted successfully.',
        'delete_confirmation_not_title'               => 'NOT deleted',
        'delete_confirmation_not_message'             => "Lỗi. Your item might not have been deleted.",
        'delete_confirmation_not_deleted_title'       => 'Not deleted',
        'delete_confirmation_not_deleted_message'     => 'Nothing happened. Your item is safe.',

        'ajax_error_title' => 'Lỗi',
        'ajax_error_text'  => 'Lỗi khi tải trang. Xin vui lòng làm mới lại trang.',

        // DataTables translation
        'emptyTable'     => 'Không tồn tại dữ liệu',
        'info'           => 'Hiển thị _START_ - _END_ / _TOTAL_',
        'infoEmpty'      => 'Hiển thị 0 - 0 / 0 ',
        'infoFiltered'   => '(filtered from _MAX_ total entries)',
        'infoPostFix'    => '',
        'thousands'      => ',',
        'lengthMenu'     => '_MENU_ dòng / trang',
        'loadingRecords' => 'Đang tải...',
        'processing'     => 'Đang xử lý...',
        'search'         => 'Tìm kiếm: ',
        'zeroRecords'    => 'No matching records found',
        'paginate'       => [
            'first'    => 'Đầu tiên',
            'last'     => 'Cuối cùng',
            'next'     => 'Kế tiếp',
            'previous' => 'Kế trước',
        ],
        'aria' => [
            'sortAscending'  => ': activate to sort column ascending',
            'sortDescending' => ': activate to sort column descending',
        ],
        'export' => [
            'copy'              => 'Copy',
            'excel'             => 'Excel',
            'csv'               => 'CSV',
            'pdf'               => 'PDF',
            'print'             => 'Print',
            'column_visibility' => 'Column visibility',
        ],

    // global crud - errors
        'unauthorized_access' => 'Unauthorized access - you do not have the necessary permissions to see this page.',
        'please_fix' => 'Xin hãy chỉnh sửa các lỗi bên dưới:',

    // global crud - success / error notification bubbles
        'insert_success' => 'Thêm mới thành công.',
        'update_success' => 'Chỉnh sửa thành công.',

    // CRUD reorder view
        'reorder'                      => 'Sắp xếp',
        'reorder_text'                 => 'Kéo & thả để sắp xếp.',
        'reorder_success_title'        => 'Done',
        'reorder_success_message'      => 'Thứ tự sắp xếp đã được lưu.',
        'reorder_error_title'          => 'Lỗi',
        'reorder_error_message'        => 'Thứ tự sắp xếp chưa được lưu.',

    // CRUD yes/no
        'yes' => 'Yes',
        'no' => 'No',

    // CRUD filters navbar view
        'filters' => 'Filters',
        'toggle_filters' => 'Toggle filters',
        'remove_filters' => 'Remove filters',

    // Fields
        'browse_uploads' => 'Browse uploads',
        'select_all' => 'Select All',
        'select_files' => 'Select files',
        'select_file' => 'Select file',
        'clear' => 'Clear',
        'page_link' => 'Page link',
        'page_link_placeholder' => 'http://example.com/your-desired-page',
        'internal_link' => 'Internal link',
        'internal_link_placeholder' => 'Internal slug. Ex: \'admin/page\' (no quotes) for \':url\'',
        'external_link' => 'External link',
        'choose_file' => 'Choose file',

    //Table field
        'table_cant_add' => 'Không thể thêm mới :entity',
        'table_max_reached' => 'Maximum number of :max reached',

    // File manager
    'file_manager' => 'File Manager',
];
