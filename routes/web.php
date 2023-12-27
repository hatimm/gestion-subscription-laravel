<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/','CheminController@home');
Route::get('/blog','CheminController@home');
/*Route::get('/calendar', function () {
    return view('calendar');
});*/
Route::get('/calendar','MembershipController@calendar');
Route::post('/calendar/action','MembershipController@action');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/clienthome', function () {
    return view('clienthome');
});
Route::get('/users','CheminController@users')->name('users');
Route::get('/home', function () {
    if(Auth::check()){
        if(Auth::user()->type == 'client_user'){
            return view('clientspace');
        }
        else if(Auth::user()->type == 'admin'){
            return view('adminhome');
        }else if(Auth::user()->type == 'user'){
            return view('clienthome');
        }
    }else{
        return view('clienthome');
    }
});
/*Route::get('/home','CheminController@login');*/
Route::get('/payment', function () {
    return view('payment');
});
Route::post('/payment', 'CheminController@price');
Route::resource('users','UserController');
Route::get('/useradd', function () {
    return view('useradd');
});
Route::post('/userstore','UserController@store')->name('userstore');
Route::resource('clients','ClientController');
Route::resource('memberships','MembershipController');
Route::get('/membershipscrud','CheminController@index');
Route::get('/useredit/{id}','UserController@edit');
Route::put('/useredit/{id}','UserController@update')->name('useredit');
Route::get('/userdelete/{id}','UserController@destroy');

Route::post('/clientstore','ClientController@store')->name('clientstore');
Route::get('/clientshow/{id}','ClientController@show');
Route::get('/clientedit/{id}','ClientController@edit');
Route::put('/clientedit/{id}','ClientController@update')->name('clientedit');
Route::get('/clientdelete/{id}','ClientController@destroy');

Route::get('/memberdelete/{id}','CheminController@destroy');
Route::get('/sendemail/{id}','PaymentController@Mail')->name('sendmail');
Route::post('/sendmail','Membershipcontroller@Send');

Route::get('/packs','PackController@index');

Route::get('/clientauthtable',function (){
    return view('clientauthtable');
});
Route::get('/userdataedit',function (){
    return view('userdataedit');
});
Route::put('/userdataedit/{id}','CheminController@update')->name('userdataedit');
Route::get('/userdatadelete/{id}','CheminController@delete')->name('userdatadelete');
Route::get('/membershipstatus',function (){
    return view('membershipstatus');
});

Route::get('/payments','PaymentController@index');
Route::get('/paymentdelete/{id}','PaymentController@destroy');
Route::post('/paymentstore/{id}','PaymentController@store')->name('paymentstore');


Route::get('/paymentstatus/{name}','CheminController@paymentstatus')->name('paymentstatus');
Route::get('/paymentedit/{id}','CheminController@paymentedit');
Route::put('/paymentupdate/{id}','CheminController@paymentupdate')->name('paymentupdate');
Route::get('/paymentterminate/{id}','CheminController@paymentterminate')->name('paymentterminate');

Route::get('/bill/{name}','CheminController@bill')->name('bill');



