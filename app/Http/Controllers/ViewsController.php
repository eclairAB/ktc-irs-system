<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewsController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    public function roleRedirect()
    {
        return redirect()->intended('/admin/dashboard-' . Auth::user()->role->name);
    }

    public function roleView($url_role)
    {
        $role = Auth::user()->role->name;

        if($url_role != 'dashboard-' . $role) {
            return $this->roleRedirect();
        }
        return view('vendor.voyager.role-views.dashboard-'.$role, ['name' => 'dashboard-' . $role]);
    }
}
