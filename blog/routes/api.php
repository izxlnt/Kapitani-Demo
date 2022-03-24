<?php

use App\Report;
use App\Belanja;
use App\Sop;
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

// Route::get('/reports/list', function() {
//     return Report::all();
// });

Route::get('/reports/list', 'KapitaniController@getReportList');
Route::get('/reports/detail/{id}', 'KapitaniController@getReportDetails');
Route::get('/sops/list', 'KapitaniController@getSopList');
Route::get('/belanjas/list', 'KapitaniController@getBelanjaList');


// Route::get('reports/list/{id}', function(){
//     return 
// });


Route::post('/reports/{report_id}', function(Report $report_id) {

$post->update([
    'tanaman' => request('pokok')
     ]);

});