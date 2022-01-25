
<?php

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

/**
 * @return int
 */
if (!function_exists('getLoggedInUserId')) {
    function getLoggedInUserId()
    {
        // return Auth::id();
        return 1;
    }
}

/**
 * @return User
 */
if (!function_exists('getLoggedInUser')) {
    function getLoggedInUser()
    {
        return Auth::user();
    }
}

/**
 * return user full name
 * 
 * @return String
 */
if (!function_exists('getLoggedInUserFullName')) {
    function getLoggedInUserFullName()
    {
        // return ucfirst(Auth::user()->first_name) . ' ' . Auth::user()->last_name;
        return 'Admin';
    }
}

/**
 * return user name
 * 
 * @return String
 */
if (!function_exists('getLoggedInUserName')) {
    function getLoggedInUserName()
    {
        // return ucfirst(Auth::user()->first_name);
        return 'Admin';
    }
}

/**
 * return user email
 * 
 * @return String
 */
if (!function_exists('getLoggedInUserEmail')) {
    function getLoggedInUserEmail()
    {
        // return Auth::user()->email;
        return 'admin@gmail.com';
    }
}

/**
 * return admin role id
 * 
 * @return String
 */
if (!function_exists('getAdminRoleId')) {
    function getAdminRoleId()
    {
        return 1;
    }
}

/**
 * return delivery boy role id
 * 
 * @return String
 */
if (!function_exists('getDeliveryRoleId')) {
    function getDeliveryRoleId()
    {
        return 2;
    }
}

/**
 * return user role id
 * 
 * @return String
 */
if (!function_exists('getUserRoleId')) {
    function getUserRoleId()
    {
        return 3;
    }
}

/**
 * return id's whose role user
 * 
 * @return String
 */
if (!function_exists('getUsersIds')) {
    function getUsersIds()
    {
        return User::where('role', getUserRoleId())->pluck('id');
    }
}

/**
 * return slug.
 *
 * @return string
 */
if (!function_exists('slug')) {
    function slug($string)
    {
        return Str::slug($string);
    }
}

/**
 * return date.
 *
 * @return date
 */
if (!function_exists('format_date')) {
    function format_date(string $date)
    {
        return Carbon::parse($date, config('app.timezone'))->format('d-M-Y');
    }
}

/**
 * return tiffin types.
 *
 * @return string
 */
if (!function_exists('getTiffinTypes')) {
    function getTiffinTypes()
    {
        $types = [
            [
                'id' => 0,
                'name' => 'Half Tiffin',
                'slug' => 'half-tiffin',
            ],
            [
                'id' => 1,
                'name' => 'Full Tiffin',
                'slug' => 'full-tiffin',
            ]
        ];

        return json_decode(json_encode($types), FALSE);
    }
}

/**
 * return units.
 *
 * @return string
 */
if (!function_exists('getUnits')) {
    function getUnits()
    {
        $units = [
            [
                'name' => 'Kilgogram',
                'id' => 'kg',
            ],
            [
                'name' => 'Dozen',
                'id' => 'dzn',
            ],
            [
                'name' => 'Liter',
                'id' => 'ltr',
            ],
            [
                'name' => 'Packet',
                'id' => 'pkt',
            ]
        ];

        return json_decode(json_encode($units), FALSE);
    }
}
