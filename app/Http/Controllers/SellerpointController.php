<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerpointController extends Controller
{
    public function seller_point(){
        return view('sellerpoint.index');
    }
}
