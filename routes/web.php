<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BackController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [PagesController::class, 'index'])->name('homepage');
//Visitor available route
Route::get('/notice/{id}', [PagesController::class, 'notice_show'])->name('notices.show');
Route::get('/notices', [PagesController::class, 'notice_index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'handleAdmin'])->middleware('admin')->name('admin.route');

//Route group for Admin
Route::prefix('admin')->group( function() {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'handleAdmin']);
    //slider photo crud
    Route::get('/photos', [BackController::class, 'slider'])->name('admin.photos');
    Route::get('/photos/create', [BackController::class, 'slider_create'])->name('admin.slider_create');
    Route::post('/photos', [BackController::class, 'slider_store'])->name('admin.slider_store');
    Route::delete('/photos/{id}', [BackController::class, 'slider_destroy'])->name('admin.slider_destroy');
    Route::get('/photos/{id}/edit', [BackController::class, 'slider_edit'])->name('admin.slider_edit');
    Route::put('/photos/{id}', [BackController::class, 'slider_update'])->name('admin.slider_update');
    //Notice CRUD
    Route::get('/notices', [BackController::class, 'notice_index'])->name('admin.notice_index');
    Route::get('/notice/create', [BackController::class, 'notice_create'])->name('admin.notice_create');
    Route::post('/notice', [BackController::class, 'notice_store'])->name('admin.notice_store');
    Route::get('/notice/{id}/edit', [BackController::class, 'notice_edit'])->name('admin.notice_edit');
    Route::put('/notice/{id}', [BackController::class, 'notice_update'])->name('admin.notice_update');
    Route::delete('/notice/{id}', [BackCOntroller::class, 'notice_destroy'])->name('admin.notice_destroy');
    Route::get('notice/{id}', [BackController::class, 'notice_show'])->name('admin.notice_show');
    //News CRUD
    Route::get('/news&events', [BackController::class, 'events_index'])->name('admin.events_index');
    Route::get('/events/create', [BackController::class, 'event_create'])->name('admin.event_create');
    Route::post('/events', [BackController::class, 'event_store'])->name('admin.event_store');
    Route::delete('/events/{id}', [BackController::class, 'event_destroy'])->name('admin.event_destroy');
    Route::get('/events/{id}/edit', [BackController::class, 'event_edit'])->name('admin.event_edit');
    Route::put('/events/{id}', [BackController::class, 'event_update'])->name('admin.event_update');
});

Route::get('/news', [PagesController::class, 'news_list']);
Route::get('/news/{id}', [PagesController::class, 'news_show']);