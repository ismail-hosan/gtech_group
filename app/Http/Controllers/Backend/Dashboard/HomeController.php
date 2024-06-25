<?php

namespace App\Http\Controllers\Backend\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;


use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('backend_extra_path.pages.dashboard.index', get_defined_vars());
    }
}
