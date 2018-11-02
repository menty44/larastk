<?php

use Illuminate\Http\Request;
use App\Http\Requests;
//use EllipseSynergie\ApiResponse\Contracts\Response;
use App\Account;
//use App\Transformer\DepositTransformer;
//use App\Transformer\AccountTransformer;
//use App\Transformer\BalanceTransformer;
//use App\Transformer\WithdrawalTransformer;
use Illuminate\Support\Facades\Input;
//use DB;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//get home
Route::get('/test','MpesaController@mpesanew');
