<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\FileController;


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

Route::post('/uploader', [FileController::class, 'upload'])->name('file.upload');
Route::get('/downloader', [FileController::class, 'download'])->name('file.download');

// Route::post('register', [AuthController::class, 'register']);
// Route::post('login', [AuthController::class, 'login']);
// Route::post('forget-password', [AuthController::class, 'forgetPassword']);
// Route::post('update-forget-password', [AuthController::class, 'updateForgetPassword']);
// Route::get('clear',[AuthController::class,'clearCache']);


// Authorized API's

// Route::middleware(['auth:api'])->group(function () {

// });





// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
