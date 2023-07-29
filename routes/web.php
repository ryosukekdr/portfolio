<?php

use Illuminate\Support\Facades\Route;


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

use App\Http\Controllers\Admin\HomeController;
Route::controller(HomeController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('blog/create', 'add')->name('blog.add');
    Route::post('blog/create', 'create')->name('blog.create');
    Route::get('blog', 'index')->name('blog.index');
    Route::get('blog/edit', 'edit')->name('blog.edit');
    Route::post('blog/edit', 'update')->name('blog.update');
    Route::get('blog/delete_check', 'delete_check')->name('blog.delete_check');
    Route::get('blog/delete', 'delete')->name('blog.delete');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\HomeController as PublicHomeController;
Route::get('/', [PublicHomeController::class, 'index'])->name('index');
Route::get('/blog', [PublicHomeController::class, 'blog'])->name('blog');
Route::get('/blog/{id}', [PublicHomeController::class, 'blog_id'])->name('blog_id');
Route::get('/food', [PublicHomeController::class, 'food'])->name('food');

use App\Http\Controllers\ItemlistController as PublicItemlistController;
Route::get('/itemlist', [PublicItemlistController::class, 'index'])->name('itemlist_index');

use App\Http\Controllers\CsvDownloadController;
Route::get('/csv-download', [CsvDownloadController::class, 'downloadCsv'])->name('downloadCsv');

use App\Http\Controllers\Admin\ItemlistController;
Route::controller(ItemlistController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('itemlist/create', 'add')->name('itemlist.add');
    Route::post('itemlist/create', 'create')->name('itemlist.create');
    Route::get('itemlist/index', 'index')->name('itemlist.index');
    Route::get('itemlist/edit', 'edit')->name('itemlist.edit');
    Route::post('itemlist/edit', 'update')->name('itemlist.update');
    Route::get('itemlist/delete_check', 'delete_check')->name('itemlist.delete_check');
    Route::get('itemlist/delete', 'delete')->name('itemlist.delete');
});

//use App\Http\Controllers\NewsController as PublicNewsController;
//Route::get('/', [PublicNewsController::class, 'index'])->name('news.index');