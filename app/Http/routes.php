<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'Auth\HomeController@index');


Route::group(['middleware' => ['web']], function(){
Route::get('/signin', function(){
    return view('auth.login');
});
Route::resource('/', 'Auth\IndexController@index');
Route::resource('/reg', 'Auth\IndexController@store');

// ADMIN ROUTES
Route::group(['middleware'=>['adminauth']], function(){
    Route::resource('/adminprofilesadmin', 'Auth\EditAdminUsers');
    Route::resource('/adminprofilesguest', 'Auth\EditGuestUsers');
    Route::resource('/adminpage', 'Auth\Admin');
    Route::get('/adminpageaccept', function(){
       return view('admin.orders.accept'); 
    });
});
// ############

});





Route::post('/sendmsg', 'Auth\ProfileController@sentmsg');
Route::resource('/cart', 'Auth\CartController');
Route::resource('/basket', 'Auth\CartController');
Route::resource('/profile', 'Auth\ProfileController');
Route::post('/editprofile/{id}', 'Auth\ProfileController@editprofile');
Route::post('/changeprofileimage/{id}', 'Auth\ProfileController@editdp');
Route::resource('/checkout', 'Auth\CheckOutController');





Route::group(['middleware' => ['auth','web']], function(){
    
Route::get('/storeemulsionemulsion_ext', function(){
    return view('store.emulsion.emulsion_ext');
});
Route::get('/storeemulsionemulsion_int', function(){
    return view('store.emulsion.emulsion_int');
});
Route::get('/storetexcotetexcote_ext', function(){
    return view('store.texcote.texcote_ext');
});
Route::get('/storetexcotetexcote_int', function(){
    return view('store.texcote.texcote_int');
});
Route::get('/storegloss', function(){
    return view('store.gloss.gloss');
});

// CREATE PRODUCTS
Route::resource('/createproduct', 'Auth\Admin@createproduct');
Route::get('/emlextcreate', function(){
    return view('admin.products.emulsion_ext.create'); 
});
Route::get('/emlintcreate', function(){
    return view('admin.products.emulsion_int.create'); 
});
Route::get('/texextcreate', function(){
    return view('admin.products.texcote_ext.create'); 
});
Route::get('/texintcreate', function(){
    return view('admin.products.texcote_int.create'); 
});
Route::get('/glosscreate', function(){
    return view('admin.products.gloss.create');
});
// END OF CREATE PRODUCTS


// EDIT PRODUCTS
Route::resource('/editproduct', 'Auth\Admin@editproduct');
Route::resource('/deleteproduct', 'Auth\Admin@deleteproduct');
Route::get('/emlextedit', function(){
    return view('admin.products.emulsion_ext.edit'); 
});
Route::get('/emlintedit', function(){
    return view('admin.products.emulsion_int.edit'); 
});
Route::get('/texextedit', function(){
    return view('admin.products.texcote_ext.edit'); 
});
Route::get('/texintedit', function(){
    return view('admin.products.texcote_int.edit'); 
});
Route::get('/glossedit', function(){
    return view('admin.products.gloss.edit');
});
// END OF CREATE PRODUCTS
Route::resource('/sendmail', 'Auth\Admin@sendmail');
});



















Route::get('/test', function(){
    $cart = App\Cart::where('user_id', 1)->get();
    return $cart->count();
});