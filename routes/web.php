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

use PhpParser\Node\Expr\Print_;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test','Frontend\NoticeController@index')->name('home');
// Route::get('/home/admin','Backend\NoticeController@index');


// Route::get('/home/{id}',function($id){
//     if($id==15){
//         //echo "yes";
//         //return back();
//         //return redirect()->route('welcome');
//         //return view('welcome');
//         echo '<br>Student attendance processing completed.<br>You will be redirect in 5 seconds.<br>';
//             sleep(5); //wait for five seconds
//             return back();
//         //return redirect()->route('home');
//     }else{
//         App::abort(404);  //to show 404 page
//     }
// });
// Route::get('/home/admin/{id}',function($id){

//     if($id !== '007') { //If if not;
//         echo "Not Applicable";
//     }else{
//         //Code to show abort
//         //App::abort(403);
//         //echo ("Hello Sarfaraz");
        
//         //Code to clear cache
//         $clearArtisan = Artisan::call('cache:clear');
//         echo "done";

//         //Here goes the CMD code for clearing the Artisan config cache etc
//         //$exitCode you can set any name like $clearArtisan;
//         // $exitCode = Artisan::call('cache:clear');
//         // $exitCode = Artisan::call('config:clear');
//         // $exitCode = Artisan::call('view:clear');
//         // $exitCode = Artisan::call('route:clear');
//     }
// });


// Route::get('/admin/test','Backend\NoticeController@index');
// // Route::group(function () {
// //     Route::get('hello',function(){
// //         return 'hello';
// //     });
// // });


// //Without namespace you have to write backend\controller in every controller.
// //Route::get('/testing','backend\TestController@index'); 
// //using namespace just define the folder name after namespace=>

//Frontend Controller





Route::get('/admin',function(){

return view('login.login');


});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::group([
        'namespace' => 'Backend',
        'prefix' => 'admin',
        'middleware' => 'auth',
],function () {
    Route::get('/home','HomeController@index');
    Route::get('/site_boost','HomeController@index');
    Route::get('/home/site_boost','HomeController@boost');



    //managements routes
    //Library
    Route::get('/management/library/','ManagementController@library_index')->name('library.index');
    Route::get('/management/library/create','ManagementController@library_create')->name('library.create');
    Route::post('/management/library/store','ManagementController@library_store')->name('library.store');
    Route::get('/management/library/update','ManagementController@update');
    Route::get('/management/library/delete','ManagementController@delete');

    //Phonebook('/phonebook')
  
     Route::get('/management/phonebook/','ManagementController@phonebook_index')->name('phonebook.index');
     Route::get('/management/phonebook/create','ManagementController@phonebook_create')->name('phonebook.create');
     Route::post('/management/phonebook/store','ManagementController@phonebook_store')->name('phonebook.store');
     Route::get('/management/phonebook/delete','ManagementController@phonebook_delete')->name('phonebook.delete');




    //Notice(/notice)
    Route::get('/notice','NoticeController@index');
    Route::get('/notice/add','NoticeController@add_notice');
    Route::post('/notice/create','NoticeController@create');
    Route::get('/notice/delete/{id}','NoticeController@destroy');
    //Unsued?
    Route::get('/notice/update/{id}','NoticeController@update');
    



    //Gallery(/gallery)
    Route::get('/gallery/view','GalleryController@index')->name('gallery.index');
    Route::get('/gallery/add_image','GalleryController@create')->name('gallery.create');;
    Route::post('/gallery/store','GalleryController@store')->name('gallery.store');
    Route::get('/gallery/delete/{id}','GalleryController@destroy')->name('gallery.destroy');;




    //Slider(/slider)
  Route::get('/admin/slider/', 'SliderController@index')->name('slider.index');
  Route::post('/admin/slider/store','BackSliderController@store')->name('slider.store');
  Route::get('/admin/slider/delete/{id}','BackSliderController@destroy')->name('slider.destroy');;

  //Students(/student)
  Route::get('/student','StudentController@index')->name('student.index');
  Route::get('/student/create','StudentController@create')->name('student.create');
  Route::post('/student/store','StudentController@store')->name('student.store');
  Route::get('/student/edit','StudentController@edit')->name('student.edit');
  Route::post('/student/update','StudentController@update')->name('student.update');
  Route::post('/student/destroy/{id}','StudentController@destroy')->name('student.destroy');
  
  
  //Teachers(/teacher)
  Route::get('/teacher','TeacherController@index')->name('teacher.index');
  Route::get('/teacher/create','TeacherController@create')->name('teacher.create');
  Route::post('/teacher/store','TeacherController@store')->name('teacher.store');
  Route::get('/teacher/edit','TeacherController@edit')->name('teacher.edit');
  Route::get('/teacher/update','TeacherController@update')->name('teacher.update');
  Route::get('/teacher/destroy/{id}/','TeacherController@destroy')->name('teacher.destroy');
   
    //Employe(/employee)
    Route::get('/employee','EmployeeController@index')->name('employee.index');
    Route::get('/employee/create','EmployeeController@create')->name('employee.create');
    Route::post('/employee/store','EmployeeController@store')->name('employee.store');
    Route::get('/employee/edit','EmployeeController@edit')->name('employee.edit');
    Route::get('/employee/update','EmployeeController@update')->name('employee.update');
    Route::get('/employee/destroy/{id}/','EmployeeController@destroy')->name('employee.destroy');
     
    
   //Setting(/setting/backup)
   Route::get('/setting/backup/','SettingController@database_View')->name('backup');
   Route::post('/setting/backup/post','SettingController@database_backup')->name('backup.post');
   
   //site Infromation
   Route::get('site/setting/','WebsiteController@index')->name('site.setting.create');
   Route::post('site/setting/store','WebsiteController@store')->name('site.setting.store');
  
  
  //Academic(/academic)



    
});