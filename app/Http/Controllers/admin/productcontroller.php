<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use App\Models\category;
class productcontroller extends Controller
{

    public function insertprod(Request $request)
    {
        $product=new product;
        $product->cid=$request->get('cname');
        $product->proname=$request->get('proname');
        $product->discripation=$request->get('description');
        $product->rs=$request->get('price');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('item_img', $filename);
            $product->img = $filename;
        }

        $product->save();
        return redirect()->back()->with('message','Product added successfully');
    }
    public function product(Request $request)
    {
        $requestData = ['id', 'cid', 'proname', 'img', 'discripation', 'rs','img'];
        $pro = $request->input('search');
        $pro = DB::table('catagory')
            ->join('product', 'product.cid', '=', 'catagory.id')
            ->where('proname', "like", "%" . $pro . "%")
            ->get();
        // ->Paginate(5);
        return view('admin.product')->with(['pro' => $pro]);
    }

    public function editprod($id)
    {
        $data=DB::table('product')->where('id',$id)->first();
        $cat = Category::all();
        return view('admin.editpro')->with(['data'=>$data,'cat'=>$cat]);
    }
    public function editproduct(Request $request)
    {
        $product = product::find($request->get('id'));

        $product->cid = $request->get('name');
        $product->proname = $request->get('proname');
        $product->discripation = $request->get('discripation');
        $product->rs = $request->get('price');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('item_img', $filename);
            $product->img = $filename;
        }

        $product->save();
        //    echo"<pre>";
        //    print_r('$product');
        //    die();
        return redirect('product')->with('message', 'product update succsessfully........');
    }
    public function deleteproduct(Request $request, $id)
    {
        $data = DB::table('product')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'delete succesfully');
    }

}


