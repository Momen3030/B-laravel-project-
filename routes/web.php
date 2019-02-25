<?php
use Illuminate\Support\Facades\Mail;

Route::post('delete/{id}', 'ProfileController@destroy');
Route::get('/home','HomeController@index');
Route::get('/','HomeController@index');
Route::post('/insert','UserController@store');
Auth::routes();
Route::group(['middleware'=>'admin'],function(){
    Route::get('dashboard', 'admin\AdminController@index');
    //Route::get('home', 'MassageController@index');
    
});
Route::group(['middleware' => ['auth', 'charity']], function()
{
    Route::get('charity', 'charity\CharityController@index');
});
Route::get('sendemail', function () {
    $data = array(
        'name' => 'mo',
    );
    Mail::send('emails.welcome', $data, function ($message) {
       $message->from('momen.adel.abdelhakeem@gmail.com', 'memo');
       $message->to('momenadel3030@gmail.com')->subject(' test email');
    });
    return "Your email has been sent successfully";
});
Route::get('/profile/{id}', 'ProfileController@showProfile');
Route::get('/notification/{id}', 'NotificationController@show');
Route::get('connecttest', 'ConnectController@connect');
Route::post('connect/{id}/{id2}','ConnectController@fireEvent');
Route::post('/contact','ContactController@store');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});