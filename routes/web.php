<?php

use App\Http\Controllers\cobacontroller;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengaduanController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LoginController;

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
 
Route::get('/', function () {
    return view('User/home');
});
Route::get('/index', function () {
    return view('User/pengaduan');
});
Route::get('/edit', function () {
    return view('admin/edit');
});
Route::get('/history',[cobacontroller::class,'index2']);
Route::get('/berita',[newsController::class,'index2']);
Route::post('users-import', [\App\Http\Controllers\Controller::class,'import'])->name('user.import');
Route::get('users-export', [\App\Http\Controllers\Controller::class,'export'])->name('user.export');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('postlogin', [LoginController::class, 'login'])->name('postlogin');
Route::get('signout', [LoginController::class, 'signOut'])->name('signout'); 
Route::resource('/pengaduan', \App\Http\Controllers\pengaduanController::class)->middleware('isLogin');
Route::resource('/news', \App\Http\Controllers\newsController::class)->middleware('isLogin');
Route::resource('/coba', \App\Http\Controllers\cobacontroller::class)->middleware('isLogin');
Route::resource('/komen', \App\Http\Controllers\komenController::class)->middleware('isLogin');
Route::get('sesi/login', [LoginController::class, 'index']);
Route::post('postlogin', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'signOut']) ;
Route::resource('/kkkk', \App\Http\Controllers\kcontroller::class);








// Route::get('/news', function () {
    //     return view('admin/news/inews');
    // });
// Route::get('/data', function () {
        //     return view('admin/index');
// });
// Route::get('/news',[pengaduanController::class,'index3']);
// Route::get('/admin',[pengaduanController::class,'index1']);
// Route::get('/admin1',[pengaduanController::class,'index2']);
// Route::get('/card/{id}',[pengaduanController::class,'show']);
// Route::put('update/{$id}',[pengaduanController::class,'update']);
// Route::get('edit/{$id}',[pengaduanController::class,'edit']);
// Route::put('update/{$id}',[cobacontroller::class,'ubah']);
// Route::get('edit/{$id}',[cobacontroller::class,'edit1']);
// Route::get('/pengaduan1',[pengaduanController::class,'create']);
// Route::post('/pengaduan',[pengaduanController::class,'store']);
// Route::resource('/berita', \App\Http\Controllers\newsController::class);
// Route::get('login', [CustomAuthController::class, 'index'])->name('login');
// Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
// Route::get('news',[newsController::class,'index1']);

