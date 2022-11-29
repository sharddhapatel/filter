<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\catagorycontroller;
use App\Http\Controllers\admin\productcontroller;
use App\Http\Controllers\client\maincontroller;
use App\Http\Controllers\client\cardcontroller;
use App\Http\Controllers\client\logincontroller;
use App\Http\Controllers\client\stripcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('admin',[HomeController::class,'index']);
route::get('addproduct',[HomeController::class,'addproduct']);
route::get('addcategory',[HomeController::class,'addcategory']);
route::get('excel',[HomeController::class,'excel']);


route::get('category',[catagorycontroller::class,'category']);
route::post('insertcat',[catagorycontroller::class,'insertcat']);
route::get('editcat/{id}',[CatagoryController::class,'editcat']);
route::post('editcat',[CatagoryController::class,'editcatagory']);
route::get('deletecategory/{id}',[CatagoryController::class,'deletecategory']);

route::get('product',[productcontroller::class,'product']);
route::post('insertprod',[productcontroller::class,'insertprod']);
route::get('editprod/{id}',[productcontroller::class,'editprod']);
route::post('editproduct',[productcontroller::class,'editproduct']);
route::get('deleteproduct/{id}',[productcontroller::class,'deleteproduct']);

// ********************* client ***********************//

route::get('/',[maincontroller::class,'blogclassic']);
route::get('contact',[maincontroller::class,'contact']);
route::post('insertcontact',[maincontroller::class,'insertcontact']);

route::get('element',[maincontroller::class,'element']);
route::get('pageaboutus',[maincontroller::class,'pageaboutus']);
route::get('service',[maincontroller::class,'service']);
route::get('shop',[maincontroller::class,'shop']);

// ****************** login **********************

route::get('rejester',[logincontroller::class,'rejester']);
route::post('insertrej',[logincontroller::class,'insertrej']);
route::get('getdis/{id}',[logincontroller::class,'getdis']);
route::get('getcity/{id}',[logincontroller::class,'getcity']);
route::get('login',[logincontroller::class,'login']);
route::post('clientlogin',[logincontroller::class,'clientlogin']);
route:: get('logout',[logincontroller::class,'logout']);

//************************** card  *********************

Route::group(['middleware'=>'Client'],function()
{
route::get('card',[cardcontroller::class,'card']);
route:: get('addtocart/{id}',[cardcontroller::class,'addtocart']);
route:: get('update-cart',[cardcontroller::class,'update']);
route::delete('removecart',[cardcontroller::class,'removecart']);

route:: get('strip',[stripcontroller::class,'strip']);
route:: post('storeaddresh',[stripcontroller::class,'storeaddresh']);
});
