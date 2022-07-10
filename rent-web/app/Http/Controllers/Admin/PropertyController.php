<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function addProperty(){


        return view('admin.property.admin_add_property');
    }


    public function viewProperty(){

    }
}
