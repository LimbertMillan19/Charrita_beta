<?php

namespace App\Http\Controllers;
use App\Models\Pan;
use Illuminate\Http\Request;

class inventaryController extends Controller
{
    public function index(){
        $panes = Pan::all();
        return view("/Admin/inventory", compact("panes"));
    }

    public function update(Request $request){
        
        $pan = Pan::find();
    }
}
