<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::select('id')->get();
        $customers = $users->whereIn('id', getUsersIds())->count();
        $deactive = $users->whereIn('id', getInactiveUsersIds())->count();
        $active = $users->whereIn('id', getActiveUsersIds())->count();
        $delivery_boys = $users->whereIn('id', getDeliveryIds())->count();
        return view('admin.dashboard', compact('customers', 'deactive', 'active', 'delivery_boys'));
    }
}
