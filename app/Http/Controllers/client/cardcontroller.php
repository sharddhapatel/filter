<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
USE Illuminate\Support\Facades\Session;

class cardcontroller extends Controller
{
   public function card(){
    return view('client.cart');
   }

   public function addtocart(Request $request, $id)
   {
       $user_id = Session::get('user_id');
       $product = DB::select('select * from product where id=' . $id);

       $cart = Session::get('cart' . $user_id);
       if (isset($cart[$id])) {
           $cart[$id]['quantity'] += 1;
           session()->put('cart' . $user_id, $cart);
           return redirect()->back()->with('success', 'Product added to cart successfully!');
       }
       $cart[$product[0]->id] = array(
           "id" => $product[0]->id,
           "proname" => $product[0]->proname,
           "rs" => $product[0]->rs,
           "img" => $product[0]->img,
           "quantity" => 1,
       );
       Session::put('cart' . $user_id, $cart);

       return redirect()->back()->with(["message" => "Product added to cart successfully!"]);
   }
   public function update(Request $request)
   {
       if ($request->id and $request->quantity) {
           $user = Session::get('user_id');
           $cart = session()->get('cart' . $user);
           $cart[$request->id]["quantity"] = $request->quantity;
           session()->put('cart' . $user, $cart);
           session()->flash('message', 'Cart Updated Successfully');
       }
       return redirect()->back();
   }
   public function removecart(Request $request)
   {
       if($request->id) {
           $cart = session()->get('cart');
           if(isset($cart[$request->id])) {
               unset($cart[$request->id]);
               session()->put('cart', $cart);
           }
           session()->flash('success', 'Product removed successfully');
       }
   }

}
