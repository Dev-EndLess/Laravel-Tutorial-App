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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id),
    ]);
});

