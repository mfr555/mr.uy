<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;

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

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/diseno-web', [HomeController::class, 'disenoWeb'])->name('diseno-web');
Route::get('/sitemap.xml', [HomeController::class, 'sitemap'])->name('sitemap');
Route::get('/calculadoras', [HomeController::class, 'calculadoras'])->name('calculadoras');

Route::prefix('contacto')->group(function () {
    Route::get('/', [HomeController::class, 'contacto'])->name('contacto');
    Route::post('/send', [MailController::class, 'send'])->name('contacto.send');
});
