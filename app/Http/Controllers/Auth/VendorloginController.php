<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorloginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:store');
    }

    public function store_login_page(Request $r){
        return view('auth.vendors.vendor_login');
    }
}
