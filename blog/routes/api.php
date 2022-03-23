<?php

use App\Report;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/reports', function() {
    return Report::all();
});

Route::post('/reports', function() {
    return Post::create([

    ]);
});

Route::post('/reports/{report_id}', function(Report $report_id) {

$post->update([
    'tanaman' => request('pokok')
     ]);

});