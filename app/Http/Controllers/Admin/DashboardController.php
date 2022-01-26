<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::select('id', 'role', 'status')->get();
        $customers = $users->whereIn('role', getUsersIds())->count();
        $deactive = $users->whereIn('role', getUsersIds())->where('status', 0)->count();
        $active = $users->whereIn('role', getActiveUsersIds())->count();
        $delivery_boys = $users->whereIn('role', getDeliveryIds())->count();
        return view('admin.dashboard', compact('customers', 'deactive', 'active', 'delivery_boys'));
    }
}
