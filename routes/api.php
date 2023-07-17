<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\SegmentController;
=======
>>>>>>> b2e2675 (versaoBeta-1)

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
<<<<<<< HEAD
Route::get('/teste',function (){ return "Aplicação Injeção";});
//customer
Route::post('/customer',[CustomerController::class,'store']);
//segment
Route::post('/segment',[SegmentController::class,'store']);
Route::get('/segment',[SegmentController::class,'index']);
Route::get('/segment/{id}',[SegmentController::class,'show']);
Route::put('/segment/{id}',[SegmentController::class,'update']);
Route::delete('/segment/{id}',[SegmentController::class,'destroy']);

=======
Route::get('/teste',function (){
    return "Aplicação Injeção";
});
>>>>>>> b2e2675 (versaoBeta-1)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
