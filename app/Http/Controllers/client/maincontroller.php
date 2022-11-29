<?php

namespace App\Http\Controllers\client;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\product;
class maincontroller extends Controller
{
    // public function blogclassic(){
    //     $data = Product::paginate(3);
    //     return view('client.blogclassic')->with(['data'=>$data]);
    // }
    public function blogclassic(Request $request)
    {
        $requestData = ['id', 'cid', 'proname', 'discripation', 'rs', 'img'];
        $min_price = $request->input('min_price');
        $max_price = $request->input('max_price');
        if (($min_price) && ($max_price)) {
            $data = DB::table('product')
            ->whereBetween('rs', [$min_price, $max_price])->paginate(3);
        }
        elseif (! is_null($min_price)) {
            $data = DB::table('product')
            ->where('rs', '>=', $min_price)->paginate(3);
        }
        elseif (! is_null($max_price)) {
            $data = DB::table('product')
            ->where('rs', '<=', $max_price)->paginate(3);
        }
        else {
            $data = DB::table('product')->paginate(3);
            }
        return view('client.blogclassic')->with(['data' => $data, 'min_price' => $min_price, 'max_price' => $max_price]);
    }


    public function contact(){
        $city=DB::table('cities')->get();
        return view('client.contact')->with(['city'=>$city]);
    }
    public function element(){
        return view('client.element');
    }
    public function pageaboutus(){
        return view('client.pageaboutus');
    }
    public function service(){
        return view('client.service');
    }
    public function shop(){
        return view('client.shop');
    }
    public function insertcontact(Request $request){

        $contact = new contact;
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->password = $request->get('password');
        $contact->city = $request->get('city');
        $contact->message = $request->get('message');
        $contact->save();
        return redirect()->back()->with('message', 'Contact added successfully');
    }

}
