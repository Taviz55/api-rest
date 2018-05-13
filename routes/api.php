<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resourse('buyers','Buyer\BuyerController', ['only' => ['index', 'show']]);

Route::resourse('categories','Category\CategoryController', ['except' => ['create', 'edit']]);

Route::resourse('products','Product\ProductController', ['only' => ['index', 'show']]);

Route::resourse('transactions','Transaction\TransactionController', ['only' => ['index', 'show']]);

Route::resourse('sellers','Seller\SellerController', ['only' => ['index', 'show']]);

Route::resourse('users','User\UserController', ['except' => ['create', 'edit']]);
