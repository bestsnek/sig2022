<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PageController;

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
    return view('welcome');
});


Route::get("/",[SiteController::class, "landing"])->name("landing");
Route::get("/point",[SiteController::class, "point"])->name("point");
Route::get("/polygon",[SiteController::class, "polygon"])->name("polygon");
Route::get("/polyline",[SiteController::class, "polyline"])->name("polyline");
Route::get("/all",[SiteController::class, "all"])->name("all");
Route::get("/data",[SiteController::class, "data"])->name("data");

//crud polygon

Route::get('formtambahpolygon', [SiteController::class, 'formTambahPolygon'])->name('formtambahpolygon');
Route::post('tambahpolygon', [SiteController::class, 'tambahPolygon'])->name('tambahpolygon');
Route::get('formeditpolygon/{id}', [SiteController::class, 'formEditPolygon'])->name('formeditpolygon');
Route::post('editpolygon/{id}', [SiteController::class, 'editPolygon'])->name('editpolygon');
Route::get('hapuspolygon/{id}', [SiteController::class, 'HapusPolygon'])->name('hapuspolygon');

//crud polyline

Route::get('formtambahpolyline', [SiteController::class, 'formTambahPolyline'])->name('formtambahpolyline');
Route::post('tambahpolyline', [SiteController::class, 'tambahPolyline'])->name('tambahpolyline');
Route::get('formeditpolyline/{id}', [SiteController::class, 'formEditPolyline'])->name('formeditpolyline');
Route::post('editpolyline/{id}', [SiteController::class, 'editPolyline'])->name('editpolyline');
Route::get('hapuspolyline/{id}', [SiteController::class, 'HapusPolyline'])->name('hapuspolyline');

Route::get('formtambahpolyline', [SiteController::class, 'formTambahPolyline'])->name('formtambahpolyline');
Route::post('tambahpolyline', [SiteController::class, 'tambahPolyline'])->name('tambahpolyline');
Route::get('formeditpolyline/{id}', [SiteController::class, 'formEditPolyline'])->name('formeditpolyline');
Route::post('editpolyline/{id}', [SiteController::class, 'editPolyline'])->name('editpolyline');
Route::get('hapuspolyline/{id}', [SiteController::class, 'HapusPolyline'])->name('hapuspolyline');

//crud point

Route::get('formtambahpoint', [SiteController::class, 'formTambahPoint'])->name('formtambahpoint');
Route::post('tambahpoint', [SiteController::class, 'tambahPoint'])->name('tambahpoint');
Route::get('formeditpoint/{id}', [SiteController::class, 'formEditPoint'])->name('formeditpoint');
Route::post('editpoint/{id}', [SiteController::class, 'editPoint'])->name('editpoint');
Route::get('hapuspoint/{id}', [SiteController::class, 'HapusPoint'])->name('hapuspoint');

Route::resource('maps', PageController::class);