<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function notifications_sweetalert2()
    {
        return view('pages.notifications.notifications_sweetalert2');
    }
    public function notifications_toastr()
    {
        return view('pages.notifications.notifications_toastr');
    }
}
