<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Admin\ReservationTable;
use App\Models\Admin\Order;

class DashboardController extends Controller
{
    protected $data = []; // the information we send to the view

    public function dashboard()
    {
        $this->data['title'] = trans('backpack::base.dashboard'); // set the page title

        $reservationTable = ReservationTable::where('status_id', 0)->get();
        $order = Order::where('status_id', 0)->get();
        return view('admin.dashboard.info', $this->data , compact('reservationTable', 'order'));
    }

    public function redirect()
    {
        // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
        return redirect(backpack_url('dashboard'));
    }
}