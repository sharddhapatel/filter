<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Facades\DB;

class catagorycontroller extends Controller
{
    public function category(Request $request){
        $requestData = ['id','name'];
        $name=$request->input('search');
          $data = DB::table('catagory')
          ->where('name',"like","%".$name."%")
          ->get();
        return view('admin.category')->with(['data'=>$data]);
    }
    public function insertcat(Request $request)
    {
        $category=new category;
        $category->name=$request->get('name');

        $category->save();
        return redirect()->back()->with('message','Category added successfully');
    }
    public function editcat($id)
    {
        $data=DB::table('catagory')->where('id',$id)->first();
        return view('admin.editcat')->with('data',$data);
    }
    // public function editcatagory(Request $request, $id)
    // {
    //     $category=Category::find($id);
    //     // $data=$request->all();
    //      $category->name=$request->get('name');
    //        $category->save();
    //        return redirect('category')->with('message','category update succsessfully........');
    // }
    public function editcatagory(Request $request)
    {
        $category = category::find($request->get('id'));
        $category->name = $request->get('name');
        $category->save();
        return redirect('category')->with('message', 'Category update succsessfully........');
    }
    public function deletecategory(Request $request, $id)
    {
        $data = DB::table('catagory')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'delete succesfully');
    }
}
