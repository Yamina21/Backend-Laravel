<?php
use App\Models\Graph;
use App\Models\Node;
use App\Models\Relation;


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


Route::post('/graphs', function(){

  return Graph::all();

});

Route::post('/nodes', function(){

  return Node::all();

});

Route::get('/graphs', [App\Http\Controllers\GraphController::class, 'index']);
Route::post('/graphs/create', [App\Http\Controllers\GraphController::class, 'create']);
Route::resource('graphs','\App\Http\Controllers\GraphController');
Route::get('/graphs/{id}', [App\Http\Controllers\GraphController::class, 'show']);
Route::get('/graphs/{id}/edit', [App\Http\Controllers\GraphController::class, 'edit']);
Route::get('/graphs/search/{name}',  [App\Http\Controllers\GraphController::class, 'search']);
Route::put('/graphs/{id}', [App\Http\Controllers\GraphController::class, 'update']);
Route::delete('/graphs/{id}', [App\Http\Controllers\GraphController::class, 'destroy']);

Route::get('/nodes', [App\Http\Controllers\NodeController::class, 'index']);
Route::post('/nodes/create', [App\Http\Controllers\NodeController::class, 'create']);
Route::get('/nodes/{id}', [App\Http\Controllers\NodeController::class, 'show']);
Route::get('/nodes/{id}/edit', [App\Http\Controllers\NodeController::class, 'edit']);
Route::put('/nodes/{id}', [App\Http\Controllers\NodeController::class, 'update']);
Route::delete('/nodes/{id}', [App\Http\Controllers\NodeController::class, 'destroy']);

Route::get('/relations', [App\Http\Controllers\RelationsController::class, 'index']);
Route::get('/relations/{id}/edit', [App\Http\Controllers\RelationController::class, 'edit']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
