<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ClientController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/* Route::get('/',function()
{
    return view('welcome');
}); */
Route::get('/',[HomeController::class,'welcome']);
Route::get('Dashboard',[HomeController::class,'Dashboard'])->name('Dashboard');




Route::get('Brand',[BrandController::class,'index']);

Route::get('Category/index'     ,[CategoryController::class,'index']);
Route::get('FetchCategory'      ,[CategoryController::class,'FetchCategory']);
Route::post('Store'             ,[CategoryController::class,'Store']);
Route::post('Store/Category'    ,[CategoryController::class,'Store']);
Route::post('Update'            ,[CategoryController::class,'Update'])->name('Update.Category');
Route::post('Delete'            ,[CategoryController::class,'Delete'])->name('Delete.Category');



Route::get('Product/index'      ,[ProductController::class,'index']);
Route::get('Product/AddProduct' ,[ProductController::class,'AddProduct']);
Route::post('Store/Product'     ,[ProductController::class,'Store']);
Route::get('Product/Edit/{id}'  ,[ProductController::class,'Edit']);
Route::get('Delete/Images/Product',[ProductController::class,'DeleteImages']);
Route::get('DeleteProduct'      ,[ProductController::class,'DeleteProduct']);
Route::get('Product/Detail/{id}',[ProductController::class,'ProductDetail']);
Route::get('StatusFeatured'     ,[ProductController::class,'StatusFeatured']);
Route::get('StatusTrading'     ,[ProductController::class,'StatusTrading']);
Route::get('Statusbestdeals'     ,[ProductController::class,'Statusbestdeals']);
Route::get('StatusNewProduct'     ,[ProductController::class,'StatusNewProduct']);
Route::get('StatusBestSelling'     ,[ProductController::class,'StatusBestSelling']);
Route::post('UpdateProduct'       ,[ProductController::class,'UpdateProduct']);
Route::get('Marque/index'       ,[MarqueController::class,'index']);
Route::get('FetchMarque'        ,[MarqueController::class,'FetchMarque']);
Route::post('Store'             ,[MarqueController::class,'Store'])->name('Store.marque');


Route::get('Order/index'        ,[OrderController::class,'index']);
Route::get('Livre/Order/{id}'       ,[OrderController::class,'Livre']);
Route::get('Traitement/Order/{id}'   ,[OrderController::class,'Traitement']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('products/Category/{id}',[HomeController::class,'SelectedCategory']);
Route::get('CountCarteByClient' ,[HomeController::class,'CountCarteByClient']);
Route::get('List/Products'      ,[ProductController::class,'List']);
Route::get('AddCart'            ,[ProductController::class,'AddCart']);
Route::get('listCart'           ,[ProductController::class,'ListCart']);
Route::get('DeleteCart'           ,[ProductController::class,'DeleteCart']);
Route::get('DetailProduct'           ,[ProductController::class,'DetailProduct']);
Route::get('filterByPrice'           ,[ProductController::class,'filterByPrice']);

Route::get('Setting'                  ,[InfoController::class,'index']);

Route::post('UpdateSetting'           ,[InfoController::class,'UpdateSetting']);

Route::get('Contact'                ,[HomeController::class,'Contact']);
Route::get('Cart'                   ,[HomeController::class,'Cart']);
Route::get('changeCart'             ,[HomeController::class,'changeCart']);
Route::get('getMyCartePageCarte'    ,[HomeController::class,'getMyCartePageCarte']);


Route::get('checkout'                   ,[OrderController::class,'checkout']);
Route::post('PostCheckout'              ,[OrderController::class,'PostCheckout']);
Route::get('Detail/Order/{id}'          ,[HomeController::class,'Detail']);
Route::get('Account'                   ,[HomeController::class,'Account']);
Route::get('About'                   ,[HomeController::class,'About']);
Route::post('UpdateAdmin'                   ,[HomeController::class,'UpdateAdmin']);


Route::get('Customer'                 ,[ClientController::class,'index']);

