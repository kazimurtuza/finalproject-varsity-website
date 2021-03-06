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
})->name('index');
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

//student part
Route::get('/student-Registration','StudentController@StudentRegistration')->name('student-Registration');
//in student-registration when click department show intake list
Route::get('/intake-list','StudentController@intakelist')->name('intake-list');
Route::get('/intakewise-sectonList','StudentController@intakewisesectonList')->name('intakewise-sectonList');
Route::post('/student-register','StudentController@studentregister')->name('student-register'); 
Route::get('/student-list','StudentController@studentlist')->name('student-list'); 
Route::get('/showintake-list','StudentController@showintakelist')->name('showintake-list'); 
Route::get('/showsection-list','StudentController@showsectionlist')->name('showsection-list'); 
Route::get('/studentsList-table','StudentController@studentsListTable')->name('studentsList-table'); 

Route::get('/departmentwise-table','StudentController@departmentwiseStudentlist')->name('departmentwise-table'); 

Route::get('/intakewise-table','StudentController@intakeWiseStudentlist')->name('intakewise-table'); 

//student-nx

Route::get('/nx-login','NxController@showlogin')->name('nx-login');
Route::post('/studentlogin','NxController@login')->name('studentlogin');
Route::get('/nx-home','nxhomeController@Nxhome')->name('nx-home');
Route::get('/nx-studentinfo','nxhomeController@Nxstudentinfo')->name('nx-studentinfo');  
Route::get('/nx-academicinfo','nxhomeController@academicinfo')->name('nx-academicinfo');  
Route::get('/nx-academicinfo2','nxhomeController@academicinfo2')->name('nx-academicinfo2');  
Route::post('/Nxstudent-logout','nxhomeController@Nxlogout')->name('Nxstudent-logout');

//teachers
Route::get('/teacher-login','TeacherLoginController@loginshow')->name('teacher-login');
Route::post('/teacherlogin','TeacherLoginController@login')->name('teacherlogin');
Route::get('/teacher-home','TeacherHomeController@teacherhome')->name('teacher-home');
Route::post('/teacher-logout','TeacherHomeController@logout')->name('teacher-logout');
Route::get('/teacher-register','TeachersdataController@TeacherRegister')->name('teacher-register');
Route::post('/teacher-register','TeachersdataController@TeacherRegistration')->name('teacher-register');
Route::get('/teacher-class-add','TeachersdataController@classadd')->name('teacher-class-add');
Route::get('/teachers-departmentwise-add','TeachersdataController@TeacherAddDepartment')->name('teachers-departmentwise-add');  
Route::get('sub-list','TeachersRoutineController@sublist')->name('sub-list');    
Route::get('teacherlist','TeachersRoutineController@teacherlist')->name('teacherlist');      
Route::post('teachersroutine-data','TeachersRoutineController@teachersRoutineData')->name ('teachersroutine-data');      

 

