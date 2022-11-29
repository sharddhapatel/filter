<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\city;
use App\Models\district;
use App\Models\state;

class logincontroller extends Controller
{
    // public function login()
    // {
    //     return view('client.login');
    // }
    // public function registration()
    // {
    //     $stats=DB::table('states')->get();
    //     return view('client.registration')->with(['stats'=>$stats]);
    // }

    public function rejester()
    {
        $stats = State::all();
        return view('client.registration', ['stats' => $stats]);
    }


    public function insertrej(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('client.registration');
        } else {
            $data = $request->all();
            $ans = DB::table('rejester')->insert(["fname" => $data['fname'],"email" => $data['email'],"password" => $data['password'],"mobileno" => $data['mobileno'],"stat" => $data['state'], "district" => $data['district'], "city" => $data['city']]);
            return redirect()->back()->with("message", "Register Sucessfully...");
        }
    }

    public function getdis($id)
    {
        $dist = district::where("state_id", $id)->get()->pluck("name", "id");
        return response()->json($dist);
    }

    public function getcity($id)
    {
        $city = city::where("districtid", $id)->get()->pluck("name", "id");
        return response()->json($city);
    }
    public function login(){
        return view('client.login');
    }
    public function clientlogin(Request $req)
        {
            $email=$req->input('email');
            $password=$req->input('password');
            $data=DB::table('rejester')->where('email',$email)->first();

            $count=DB::table('rejester')->where(['email'=>$email])->count();
            $count1=DB::table('rejester')->where(['password'=>$password])->count();

            if($email !=" " && $password !=" ")
            {
                if($count>0 && $count1>0)
                {
                    Session::put('user_id',$data->id);
                    Session::put('studemail',$data->email);

                    return redirect('/');
                }
                else
                {
                    return redirect()->back()->with('error',"please enter right EMAIL and PASSWORD");
                }
            }
            else
            {
                return redirect()->back()->with('error',"enter email and password");
            }
        }
        public function logout()
{
    Session()->forget('user_id');
    Session()->forget('studemail');

    return redirect('login');
}
}
