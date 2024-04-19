<?php
/*
| 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  



Route::get('/', [ListingController::class,'index']);

Route::get('/listings/{listing}', [ListingController::class, 'show']);
















































// ** My Example/Test ** //

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return response('Hello!', 200)
//     ->header('content-type','application/json');

// });

// Route::get('/hell', function () {
//     return response([
//         'message' => 'Welcome in Hell',
//         'status' => 200
//         ])
//     ->header('content-type','application/json')
//     ->header('secret', 666);
// });


// Route::get('/users/{id}', function ($id) {
//     // dd($id);
//     return response('Post: ' . $id, 200);
// })->where('id', '[0-9]+');

// Route::get('/search', function (Request $request) {
//     //  dd($request);
//     return $request->name . ' ' . $request->city;
// });