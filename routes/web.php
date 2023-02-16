<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AprendiztblController;
use App\Http\Controllers\ProgramatblController;
use App\Http\Controllers\InstructortblController;
use App\Http\Controllers\SliderController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');
});



/*
| Ruta para la vista Aprendices.
*/
Route::resource('aprendiztbl', App\Http\Controllers\AprendiztblController::class);

/*
| Ruta para la vista Programatbl.
*/
Route::resource('programatbl', App\Http\Controllers\ProgramatblController::class);

/*
| Ruta para la vista Instructor.
*/

Route::resource('instructortbl', App\Http\Controllers\InstructortblController::class);

/**
 * Ruta para la vista Solicitud comité
 */

Route::resource('solicitudcomitetbl', App\Http\Controllers\SolicitudcomitetblController::class);


// Route::group(['middleware'=> ['role:admin']], function(){

//     Route::resource('users', 'UserssController');
//     Route::resource('permission', 'PermissionController');
//     Route::resource('roles', 'RolesController');
// });