<?php


namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\product;
use Stripe;
use Illuminate\Support\Facades\Session;

class stripcontroller extends Controller
{
    public function strip()
    {
        $addresh = DB::table('address')->get();
        return view('client.strip')->with('addresh', $addresh);
    }
   
}
