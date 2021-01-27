<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/display-discount', function () {
   return view('calculate');
});
Route::post('/display-discount', function (Illuminate\Http\Request $request) {
    $productDescription = $request->input('productDescription');
    $price = $request->input('price');
    $discountPercent = $request->input('discountPercent');
    $discountAmount = $price * $discountPercent * 0.1;
    $discountPrice = $price - $discountAmount;
    return view('show_discount_amount', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));
});
