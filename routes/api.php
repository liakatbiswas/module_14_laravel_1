<?php

use App\Http\Controllers\ExamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware( 'auth:sanctum' )->get( '/user', function ( Request $request ) {
 return $request->user();
} );

// Question 1
// http://127.0.0.1:8000/api/exam
Route::post( '/exam', [ExamController::class, 'RetrieveName'] );

// Question 2
// http://127.0.0.1:8000/api/useragent
Route::post( '/useragent', [ExamController::class, 'UserAgent'] );

// Question 3
// http://127.0.0.1:8000/api/apiendpoint?page=Liakat
Route::get( '/apiendpoint', [ExamController::class, 'ApiEndpoint'] );

// Question 4
// http://127.0.0.1:8000/api/jsonresponse
Route::get( '/jsonresponse', [ExamController::class, 'JsonResponse'] );

// Question 5
// http://127.0.0.1:8000/api/upload
Route::post( '/upload', [ExamController::class, 'FileUploads'] );

// Question 6
// http://127.0.0.1:8000/api/setcookie
Route::post( '/setcookie', [ExamController::class, 'SetCookie'] );

// Question 7
// http://127.0.0.1:8000/api/submit
Route::post( '/submit', function ( Request $request ) {
 $email = $request->input( 'email' );
 if ( $email ) {
  return [
   "success" => true,
   "message" => "Form submitted successfully.",
  ];
 } else {
  return "Email must not be empty!";
 }
} );