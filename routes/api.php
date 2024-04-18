<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/users', function () {
  return response()->json([
    [
      'name' => 'John',
      'age' => 14,
    ],
    [
      'name' => 'Sara',
      'age' => 32,
    ],
    [
      'name' => 'Leon',
      'age' => 28,
    ],
    [
      'name' => 'Jill',
      'age' => 26
    ]
  ]);
});