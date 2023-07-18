<?php

use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::post('/supports', [SupportController::class, 'store'])->name('supports.store');
route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});


