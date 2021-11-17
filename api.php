<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// get route
Route::get('list',[apiController::class,'list']);
// data add route
Route::post('add',[apiController::class,'add']);
Route::put('update',[apiController::class,'update']);
Route::delete('delete/{id}',[apiController::class,'finished']);
Route::get('search/{name}',[apiController::class,'searching']);
