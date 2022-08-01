<?php

use App\Http\Controllers\Admin\PropertyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Admin\ContactController;
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

Route::post('/test', [TestController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::match(['get', 'post'],'/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');


Route::group(['prefix'=>'admin','middleware' => 'auth:admin'], function (){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');


    Route::match(['get', 'post'],'/add-property', [PropertyController::class, 'addProperty'])->name('admin.add.property');
    Route::get('/view-property', [PropertyController::class, 'viewProperty'])->name('admin.view.property');
    Route::get('/view-property_fetch', [PropertyController::class, 'fetch'])->name('admin.dynamicdependent.fetch');
    Route::get('/view-property_fetch_city', [PropertyController::class, 'fetchCity'])->name('admin.dynamicdependent.fetch.city');
    Route::post('/delete-property/{id}', [PropertyController::class, 'deleteProperty'])->name('admin.delete.property');

    //crotaria

    Route::match(['get', 'post'],'/add-croatia', [PropertyController::class, 'addCroatia'])->name('admin.add.croatia');



    Route::get('/view-contact', [ContactController::class, 'index'])->name('admin.view.contact');
    Route::post('/delete-contact/{id}', [ContactController::class, 'destroy'])->name('admin.delete.contact');
    Route::get('/view-subscriber', [ContactController::class, 'subscriber'])->name('admin.view.subscriber');
    Route::post('/delete-subscriber/{id}', [ContactController::class, 'subscriberDelete'])->name('admin.delete.subscriber');


    Route::get('/view-agent', [\App\Http\Controllers\Admin\AgentController::class, 'index'])->name('admin.view.agent');
    Route::match(['get', 'post'],'/add-agent', [\App\Http\Controllers\Admin\AgentController::class, 'addAgent'])->name('admin.add.agent');
    Route::post('/delete-agent/{id}', [\App\Http\Controllers\Admin\AgentController::class, 'agentDelete'])->name('admin.delete.agent');



});
