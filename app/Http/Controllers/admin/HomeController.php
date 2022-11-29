<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index(){
        $a=DB::table('catagory')->get();
        $b=DB::table('product')->get();
        return view('admin.index')->with(['a'=>$a,'b'=>$b]);
    }

    public function addproduct(){
        $data=DB::table('catagory')->get();
        return view('admin.addproduct')->with(['data'=>$data]);
    }

    public function addcategory(){
        return view('admin.addcategory');
    }
    public function excel(){
        return view('admin.excel');
    }
}
