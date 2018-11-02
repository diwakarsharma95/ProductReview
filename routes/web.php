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
use App\Product;
use App\User;
use App\Manufacturer;
use App\Review;
use Illuminate\Support\Facades\Input;

//This is product resource controler
Route::resource('product', 'ProductController');

//This is review resource controler
Route::resource('product.review', 'ReviewController');

//This will redirect postControler to root page
Route::resource('/', 'ProductController');

//This is a review controler route for like 
Route::get('/product/{prod_id}/review/{rev_id}/like','ReviewController@like');

//This is a review controler route for dislike 
Route::get('/product/{prod_id}/review/{rev_id}/dislike','ReviewController@dislike');

//This route is used for documentation.
Route::get('/documetation', function(){
    return view('documentation');
});

//This route is used to search any user in the database
Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $user = User::where('fname','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('search')->withDetails($user)->withQuery ( $q );
    else return view ('error');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');