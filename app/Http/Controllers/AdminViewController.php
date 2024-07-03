<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminViewController extends Controller
{
    public function dashminn(){
        return view( 'admin.dashall');
    }

    public function dashuser(){
        return view('admin.usac');
    }

    public function dashporto(){
        return view('admin.portoall');
    }

    public function dashcatego(){
        return view('admin.categall');
    }

}
