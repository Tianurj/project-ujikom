<?php

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

Route::get('/ss', function () {
    return view('user.lihat');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/barang', 'BarangController');
Route::resource('/penitip', 'PenitipController');
Route::resource('/tentang', 'TentangController');
Route::resource('/kontak', 'KontakController');
Route::resource('/kategori', 'KategoriController');
Route::resource('/penjualan', 'PenjualanController');
Route::resource('/karyawan', 'KaryawanController');

Route::get('/','UserController@home');
Route::get('/product','UserController@product');
Route::get('/contact','UserController@kontak');
Route::get('/about','UserController@tentang');
Route::get('/kategoris/{id}','UserController@kategoris');
Route::get('/barangs/{id}','UserController@barangs');
Route::get('/penitip/{id}','UserController@penitip');
Route::get('/lihat/{id}','UserController@lihat');

Route::get('/jual','LaporanController@index');
Route::post('jual/penjualan','LaporanController@index2');

Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
	Route::get('/', function(){
		$data['users'] = \App\User::whereDoesntHave('roles')->get();
		return view('admin', $data);
	});
});

Route::group(['prefix' => 'member', 'middleware' => ['auth','role:member']], function(){
	Route::get('/', function(){
		return view('member');
	});
});

// Route::get('/member',function()
// {
// 	return view('errors.404');
// });

