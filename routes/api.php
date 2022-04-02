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
    return $request->users();
});
Route::middleware('auth:sanctum')->put('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->post('/user', function (Request $request) {
    return $request->user();
});

Route::put('/v1/addresses', [\App\Http\Controllers\WrapperApiController::class, 'addresses'])
->middleware(\App\Http\Middleware\NpmMiddleware::class)
->name('addresses');

Route::get('/v1/packages', [\App\Http\Controllers\WrapperApiController::class, 'packages'])
->middleware(\App\Http\Middleware\NpmMiddleware::class)
->name('packages');

Route::post('/v1/manifests', [\App\Http\Controllers\WrapperApiController::class, 'manifests'])
->middleware(\App\Http\Middleware\NpmMiddleware::class)
->name('manifests');

Route::post('v1/batches', [\App\Http\Controllers\WrapperApiController::class, 'batches'])
->middleware(\App\Http\Middleware\NpmMiddleware::class)
->name('batches');

Route::get('v1/carriers', [\App\Http\Controllers\WrapperApiController::class, 'carriers'])
->middleware(\App\Http\Middleware\NpmMiddleware::class)
->name('carriers');


Route::get('/user/identitas', function(){
	return [
		'code' => '0',
		'data' => [
			'npm' => '197006048',
			'nama' => 'Gilang Fachrurrozi',
			'email' => '197006048@student.unsil.ac.id'
		]
	];
})
->middleware(\App\Http\Middleware\NpmMiddleware::class)
->name('identitas');
?>