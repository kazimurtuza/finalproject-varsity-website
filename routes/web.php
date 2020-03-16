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
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/admin-login','loginController@adminlogin')->name('admin-login');
// Route::get('/user-Registration','registerController@userregister')->name('user-Registration');
Route::post('/add-Registration','UserRegistarController@addregister')->name('add-Registration');
Route::get('/user-Registration','UserRegistarController@showRegisterForm')->name('user-Registration');
Route::get('/user-list','UserRegistarController@showuserlist')->name('user-list');


Route::get('/Edit-home-slide','UserRegistarController@EditHomeSlide')->name('Edit-home-slide');
Route::get('/announce-home-slide/{announce}','UserRegistarController@announceHomeSlide')->name ('announce-home-slide');
Route::post('/post-annonce-slide','UserRegistarController@postannonceslide')->name ('post-annonce-slide');
Route::post('/PosrEdit-home-slide','HomesliderController@PostEditHomeSlide')->name('PostEdit-home-slide');


Route::get('/EditUser-info','UserRegistarController@EditUserinfo')->name('EditUser-info');

Route::post('/PostEditUser-info','UserRegistarController@PostEditUserinfo')->name('PostEditUser-info');

Route::get('/PostEditUser-info','UserRegistarController@EditUserinfo')->name('PostEditUser-info');
Route::get('/EditUser-photo','UserRegistarController@EditUserphoto')->name('EditUser-photo');

Route::post('/PostEditUser-photo','UserRegistarController@PostEditUserphoto')->name('PostEditUser-photo');

Route::get('/EditUser-passrord','UserRegistarController@EditUserpassword')->name('EditUser-password');
Route::post('/PostEditUser-password','UserRegistarController@PostEditUserpassword')->name('PostEditUser-password');
Route::get('/Show-User-profile','UserRegistarController@ShowUserprofile')->name('Show-User-profile');

// department_add and show
Route::get('/department_add_show','DepartmentController@DepartmentAddShow')->name('department_add_show');
Route::post('/add_department','DepartmentController@AddDepartment')->name('add_department');
Route::get('/department_list','DepartmentController@DepartmentList')->name('department_list');

// intake_add and show
Route::get('/intake_add_show','IntakeController@IntakeAddShow')->name('intake_add_show');
Route::post('/add_intake','IntakeController@AddIntake')->name('add_intake');
Route::get('/intake_list','IntakeController@ShowDepartmentwiseIntake')->name('intake_list');
Route::get('/get_intake','IntakeController@GetIntake')->name('get_intake');


//section_add and show
Route::get('/section_add_show','SectionController@SectionAddShow')->name('section_add_show');
Route::get('/intake-list','SectionController@IntakeList')->name('intake-list');
Route::post('/add_section','SectionController@AddSection')->name('add_section');
Route::get('/Section-Table-Show','SectionController@SectionTableShow')->name('Section-Table-Show');
Route::get('/Section-list','SectionController@SectionList')->name('Section-list');
