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

Auth::routes();

/*use App\Http\Controllers\Auth\ResetPasswordController;
Route::post('', 'original_reset')->name('original_reset');*/

use App\Http\Controllers\Admin\UserController;
Route::controller(UserController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('user', 'show')->name('user.show');
    //Route::post('user', 'update')->name('user.update');
    
    Route::get('user/email_change', 'email_edit')->name('user.email_edit');
    Route::post('user/email_change', 'email_change')->name('user.email_change');
    Route::get('user/name_change', 'name_edit')->name('user.name_edit');
    Route::post('user/name_change', 'name_change')->name('user.name_change');
    Route::get('user/password_change', 'password_edit')->name('user.password_edit');
    Route::get('user/delete_check', 'delete_check')->name('user.delete_check');
    Route::get('user/delete', 'delete')->name('user.delete');
    Route::get('user/cover_photo/create', 'cover_photo_add')->name('user.cover_photo.add');
    Route::post('user/cover_photo/create', 'cover_photo_create')->name('user.cover_photo.create');
    Route::get('user/cover_photo/delete', 'cover_photo_delete')->name('user.cover_photo.delete');
    Route::get('user/free_comment/create', 'free_comment_add')->name('user.free_comment.add');
    Route::post('user/free_comment/create', 'free_comment_create')->name('user.free_comment.create');
    Route::get('user/free_comment/delete', 'free_comment_delete')->name('user.free_comment.delete');
    Route::get('user/profile_comment/create', 'profile_comment_add')->name('user.profile_comment.add');
    Route::post('user/profile_comment/create', 'profile_comment_create')->name('user.profile_comment.create');
    Route::get('user/profile_comment/delete', 'profile_comment_delete')->name('user.profile_comment.delete');
    Route::get('user/profile_icon/create', 'profile_icon_add')->name('user.profile_icon.add');
    Route::post('user/profile_icon/create', 'profile_icon_create')->name('user.profile_icon.create');
    Route::get('user/profile_icon/delete', 'profile_icon_delete')->name('user.profile_icon.delete');
    
    //Route::get('user/password_confirm', 'password_confirm')->name('user.password_confirm');
});

use App\Http\Controllers\Admin\BlogController;
Route::controller(BlogController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('blog/create', 'add')->name('blog.add');
    Route::post('blog/create', 'create')->name('blog.create');
    Route::get('blog', 'index')->name('blog.index');
    Route::get('blog/edit', 'edit')->name('blog.edit');
    Route::post('blog/edit', 'update')->name('blog.update');
    Route::get('blog/delete_check', 'delete_check')->name('blog.delete_check');
    Route::get('blog/delete', 'delete')->name('blog.delete');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


use App\Http\Controllers\HomeController as PublicHomeController;
//Route::get('/', [PublicHomeController::class, 'home']);
Route::get('/', [PublicHomeController::class, 'userlist']);
Route::get('/userpage', [PublicHomeController::class, 'userpage'])->name('userpage');
Route::get('/mypage', [PublicHomeController::class, 'mypage'])->name('mypage');

use App\Http\Controllers\BlogController as PublicBlogController;
Route::controller(PublicBlogController::class)->group(function () {
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/detail', 'blog_detail')->name('blog_detail');
    Route::get('/blog/search', 'blog')->name('blog.search');
});

use App\Http\Controllers\ItemlistController as PublicItemlistController;
Route::get('/itemlist', [PublicItemlistController::class, 'index'])->name('itemlist');


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

use App\Http\Controllers\Admin\LikeController;
    Route::post('/like', [LikeController::class, 'like']);


//use App\Http\Controllers\NewsController as PublicNewsController;
//Route::get('/', [PublicNewsController::class, 'index'])->name('news.index');