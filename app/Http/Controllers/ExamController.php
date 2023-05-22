<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ExamController extends Controller {

//  Question 1
 public function RetrieveName( Request $request ): string{
  $name = $request->input( 'name' );
  return $name;
 }

//  Question 2
 public function UserAgent( Request $request ): string{
  $userAgent = $request->header( 'User-Agent' );
  return $userAgent;
 }

// Question 3
 public function ApiEndpoint( Request $request ) {
  $page = $request->query( 'page', null );
  if ( $page !== null ) {
   return $page;
  } else {
   return;
  }
 }

//  Question 4
 public function JsonResponse(): JsonResponse{
  $data = [
   "message" => "Success",
   "data"    => [
    "name" => "John Doe",
    "age"  => 25,
   ],
  ];
  return response()->json( $data );
 }

// Question 5
 public function FileUploads( Request $request ): bool{
  $file = $request->file( 'avatar' );
  $file->move( public_path( 'uploads' ), $file->getClientOriginalName() );
  return true;
 }

//  Question 6
 public function SetCookie( Request $request ) {
  $rememberToken = $request->cookie( 'remember_token', null );
  return $rememberToken;
 }

}
