<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use Auth;
use DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function index()
    {
        if (Auth::user()->level=="1") {
          
        } else if (Auth::user()->level=="2") {
          
          
        } else if (Auth::user()->level=="3") {
          
          
        }
        // dd('adasdasdasdsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa');
        return view('backend/pages/dashboard/index');
    }
}
