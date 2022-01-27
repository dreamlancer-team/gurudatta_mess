<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $customers = getUsersIds()->count();
        $deactive = getInactiveUsersIds()->count();
        $active = getActiveUsersIds()->count();
        $delivery_boys = getDeliveryIds()->count();
        return view('admin.dashboard', compact('customers', 'deactive', 'active', 'delivery_boys'));
    }
}
