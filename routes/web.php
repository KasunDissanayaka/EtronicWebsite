<?php
use App\Http\Controllers\Dashboard\PortfolioDashboardController;
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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');


Auth::routes();

Route::get('/dashboard/portfolio', [PortfolioDashboardController::class, 'index'])->name('dashboard.portfolio.index');
Route::get('/dashboard/portfolio/create', [PortfolioDashboardController::class, 'create'])->name('dashboard.portfolio.create');
Route::post('/dashboard/portfolio', [PortfolioDashboardController::class, 'store'])->name('dashboard.portfolio.store');
Route::get('/dashboard/portfolio/{id}/edit', [PortfolioDashboardController::class, 'edit'])->name('dashboard.portfolio.edit');
Route::put('/dashboard/portfolio/{id}', [PortfolioDashboardController::class, 'update'])->name('dashboard.portfolio.update');
Route::delete('/dashboard/portfolio/{id}', [PortfolioDashboardController::class, 'destroy'])->name('dashboard.portfolio.destroy');
