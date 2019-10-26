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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
});

// Route::get('/viewcomplient', function () {
//     return view('viewcomplient');
// });

Route::get('/show1', 'ComplaintController@viw')->name('show1');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/complaint', 'ComplaintController@index00')->name('complaint');
Route::get('/complaint2', 'ComplaintController@index000')->name('complaint2');
Route::POST('/insert', 'ComplaintController@insert')->name('insert');

Route::get('/show', 'ComplaintController@show')->name('show');
Route::get('/edit/{id}', 'ComplaintController@edit')->name('edit');
Route::POST('/update/{id}', 'ComplaintController@update')->name('update');
Route::POST('/delete/{id}', 'ComplaintController@delete')->name('delete');

Route::get('/send/{id}', 'ComplaintController@send')->name('send');
//Route::POST('/submit/{id}', 'ComplaintController@submit')->name('submit');

//Route::prefix('admin')->group(function(){
//Route::get('/login', 'Auth\AdminloginController@showLoginForm')->name('admin.login');
//Route::POST('/login', 'Auth\AdminloginController@login')->name('admin.login.submit');
//Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
//});

//Route::get('/admin/login', 'Auth\AdminloginController@showLoginForm')->name('admin.login');
//Route::POST('/admin/login', 'Auth\AdminloginController@login')->name('admin.login.submit');
//Route::get('/admin', 'AdminController@index');

 Route::prefix('dashboard')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    //Route::get('/ad', 'AdminController@index');
   });

 Route::get('/mail', 'Mailcontroller@home');
 //Route::POST('send/email', 'Mailcontroller@sendemail');

 Route::get('/newcomplaint', 'ComplaintController@show00')->name('newcomplaint');
 Route::get('/pnewcomplaint', 'ComplaintController@show01')->name('pnewcomplaint');
 Route::get('/cnewcomplaint', 'ComplaintController@show02')->name('cnewcomplaint');
 Route::get('/dnewcomplaint', 'ComplaintController@show03')->name('dnewcomplaint');
  Route::get('/action', 'ComplaintController@adminaction')->name('action');
  Route::get('/action/{id}', 'ComplaintController@action')->name('action');
  Route::post('/action/{id}', 'ComplaintController@action')->name('action');
  Route::post('/complaintdetails/{id}', 'ComplaintController@complaintdetails')->name('complaintdetails');
  Route::get('/processnewcomplaint', 'ComplaintController@show06')->name('processnewcomplaint');
   //Route::POST('/complaintdetails/{id}', 'ComplaintController@ins')->name('complaintdetails');
  //Route::get('/details', 'ComplaintController@details')->name('details');

  Route::get('/academic', 'ComplaintController@academic')->name('academic');
  Route::get('/lab', 'ComplaintController@lab')->name('lab');
   Route::get('/library', 'ComplaintController@library')->name('library');
   Route::get('/transport', 'ComplaintController@transport')->name('transport');
  Route::get('/canteen', 'ComplaintController@canteen')->name('canteen');
   Route::get('/account', 'ComplaintController@account')->name('account');
    Route::get('/hostel', 'ComplaintController@hostel')->name('hostel');




 Route::get('/statuscomplaint', 'ComplaintController@statuscomplaint')->name('statuscomplaint');
 
Route::get('/show12', 'StatusController@show12')->name('show12');
Route::get('/edit1/{id}', 'StatusController@edit1')->name('edit1');
Route::POST('/update1/{id}', 'StatusController@update1')->name('update1');
Route::POST('/delete1/{id}', 'StatusController@delete1')->name('delete1');
Route::get('/newcomplaint1', 'ComplaintController@show')->name('newcomplaint1');

//send email
Route::get('/sendemail/{id}', 'StatusController@sendemail')->name('email');

//Route::POST('/mail.sendmail', 'SendEmailController@index');
//Route::POST('/mail.sendmail/send', 'SendEmailController@send');
Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');
