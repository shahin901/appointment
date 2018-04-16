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
  return view('open');

/*	Notification::route('mail', 'taylor@laravel.com')
           
            ->notify(new TaskCompleted());
            return view('welcome'); */
        #    $user =Auth::user();

	#Notification::send($user, new \App\Notifications\NewPost($user));
    
         #   $user = Auth::user()-name;
          #  User::find(1)->notify(new NewPost);
            #return view('welcome');


});

Route::group(['middleware'=>['web']],function(){

	 Route::get('/index','user@getHome');
	 #Route::get('/profile','user@getProfile');
	 Route::get('/stuProfile','user@getProfile2');

	 #Route::get('/ct','user@getCH');
	 Route::get('/cht','user@getName');
	 Route::get('/appoint','user@getAppoint');
	 Route::get('/contact','user@getContact');
	 Route::get('/welcome','user@getWelcome');
	

	Route::get('/teacher','teacher@getIndex');
	Route::get('/profile2','teacher@Zndex');
	Route::get('/approved','teacher@getApproved');
	
	Route::get('/counselling','teacher@getCH');
	Route::get('/request','teacher@getRequest');
	Route::get('/chpage','teacher@getCHPage');
	Route::get('/setch','teacher@getCounsell');
	Route::post('/editch','teacher@update');
	Route::post('/setchour','teacher@insertch');

	Route::get('/delete/{Cell}','user@delete');
	Route::get('/appdelete/{Cell}','user@appdelete');

	Route::get('/updatestatus','teacher@upstatus');

	#Route::delete('/request/{Name}', 'user@destroy')->name('request.destroy');

	#Route::get('/logout','teacher@logout');	
	Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


	Route::post('/insert','user@appoint');
	Route::get('/getchour','user@getCH');

	Route::post('/stu','user@stuStore');
	#Route::get('/show','user@Show');

	Route::get('/sent','user@mail');
	Route::get('/home', 'teacher@teaprofile');
	#Route::get('/dd', 'user@ok');

	
    
	Route::get('/ed','teacher@check');
	Route::post('/catchValue','teacher@check2');

	//student sign up sign in
	Route::get('sign_up','user@sign');
	Route::get('sign_in','user@signin');

	Route::post('/stulogged','user@getProfile2');
	#Route::post('/logged','user@login');



});

Auth::routes();

Route::prefix('admin')->group(function(){
	Route::get('/login', 'Auth\adminloginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\adminloginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');

});
