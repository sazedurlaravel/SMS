<?php

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



Route::group(['middleware'=>'auth'],function(){

	Route::get('/','DefaultController@dashboard')->name('dashboard');

	//user routes
Route::prefix('users')->group(function(){
	Route::get('/view','UserController@view')->name('users.view');
	Route::get('/add','UserController@add')->name('users.add');
	Route::get('/edit/{id}','UserController@edit')->name('users.edit');
	Route::post('/update/{id}','UserController@update')->name('users.update');
	Route::post('/store','UserController@store')->name('users.store');
	Route::get('/delete/{id}','UserController@delete')->name('users.delete');
	Route::post('/status/{id}','UserController@changeStatus')->name('users.status');
});

	//Class routes
Route::prefix('setups')->group(function(){
	Route::get('/class/view','ClassController@view')->name('setups.classes.view');
	Route::get('//class/add','ClassController@add')->name('setups.classes.add');
	Route::get('/class/edit/{id}','ClassController@edit')->name('setups.classes.edit');
	Route::post('/class/update/{id}','ClassController@update')->name('setups.classes.update');
	Route::post('/class/store','ClassController@store')->name('setups.classes.store');
	Route::get('/class/delete/{id}','ClassController@delete')->name('setups.classes.delete');
});

//Student Year routes
Route::prefix('setups')->group(function(){
	Route::get('/year/view','YearController@view')->name('setups.year.view');
	Route::get('/year/add','YearController@add')->name('setups.year.add');
	Route::get('/year/edit/{id}','YearController@edit')->name('setups.year.edit');
	Route::post('/year/update/{id}','YearController@update')->name('setups.year.update');
	Route::post('/year/store','YearController@store')->name('setups.year.store');
	Route::get('/year/delete/{id}','YearController@delete')->name('setups.year.delete');
});

//Student Group routes
Route::prefix('setups')->group(function(){
	Route::get('/group/view','GroupController@view')->name('setups.group.view');
	Route::get('/group/add','GroupController@add')->name('setups.group.add');
	Route::get('/group/edit/{id}','GroupController@edit')->name('setups.group.edit');
	Route::post('/group/update/{id}','GroupController@update')->name('setups.group.update');
	Route::post('/group/store','GroupController@store')->name('setups.group.store');
	Route::get('/group/delete/{id}','GroupController@delete')->name('setups.group.delete');
});

//Student Shift routes
Route::prefix('setups')->group(function(){
	Route::get('/shift/view','ShiftController@view')->name('setups.shift.view');
	Route::get('/shift/add','ShiftController@add')->name('setups.shift.add');
	Route::get('/shift/edit/{id}','ShiftController@edit')->name('setups.shift.edit');
	Route::post('/shift/update/{id}','ShiftController@update')->name('setups.shift.update');
	Route::post('/shift/store','ShiftController@store')->name('setups.shift.store');
	Route::get('/shift/delete/{id}','ShiftController@delete')->name('setups.shift.delete');
});

//Student fee Category routes
Route::prefix('setups')->group(function(){
	Route::get('/fee/category/view','FeeCategoryController@view')->name('fee.category.view');
	Route::get('/fee/category/add','FeeCategoryController@add')->name('fee.category.add');
	Route::get('/fee/category/edit/{id}','FeeCategoryController@edit')->name('fee.category.edit');
	Route::post('/fee/category/update/{id}','FeeCategoryController@update')->name('fee.category.update');
	Route::post('/fee/category/store','FeeCategoryController@store')->name('fee.category.store');
	Route::get('/fee/category/delete/{id}','FeeCategoryController@delete')->name('fee.category.delete');
});

//Student fee Category Amount routes
Route::prefix('setups')->group(function(){
	Route::get('/fee/amount/view','FeeAmountController@view')->name('fee.amount.view');
	Route::get('/fee/amount/add','FeeAmountController@add')->name('fee.amount.add');
	Route::get('/fee/amount/edit/{fee_category_id}','FeeAmountController@edit')->name('fee.amount.edit');
	Route::post('/fee/amount/update/{fee_category_id}','FeeAmountController@update')->name('fee.amount.update');
	Route::post('/fee/amount/store','FeeAmountController@store')->name('fee.amount.store');
	Route::get('/fee/amount/details/{fee_category_id}','FeeAmountController@details')->name('fee.amount.details');
});

//profile route
	Route::prefix('profiles')->group(function(){
		Route::get('/view','ProfileController@view')->name('profiles.view');
		Route::get('/edit','ProfileController@edit')->name('profiles.edit');
		Route::post('/update','ProfileController@update')->name('profiles.update');
		Route::get('/password/view','ProfileController@password')->name('profiles.password.view');
		Route::post('/password/update','ProfileController@passwordUpdate')->name('profiles.password.update');
	});

	//ExamType routes
Route::prefix('setups')->group(function(){
	Route::get('/ExamType/view','ExamTypeController@view')->name('exam.type.view');
	Route::get('/ExamType/add','ExamTypeController@add')->name('exam.type.add');
	Route::get('/ExamType/edit/{id}','ExamTypeController@edit')->name('exam.type.edit');
	Route::post('/ExamType/update/{id}','ExamTypeController@update')->name('exam.type.update');
	Route::post('/ExamType/store','ExamTypeController@store')->name('exam.type.store');
	Route::get('/ExamType/delete/{id}','ExamTypeController@delete')->name('exam.type.delete');
});

//Subject routes
Route::prefix('setups')->group(function(){
	Route::get('/subject/view','SubjectController@view')->name('setups.subject.view');
	Route::get('/subject/add','SubjectController@add')->name('setups.subject.add');
	Route::get('/subject/edit/{id}','SubjectController@edit')->name('setups.subject.edit');
	Route::post('/subject/update/{id}','SubjectController@update')->name('setups.subject.update');
	Route::post('/subject/store','SubjectController@store')->name('setups.subject.store');
	Route::get('/subject/delete/{id}','SubjectController@delete')->name('setups.subject.delete');
});

//AssignSubject routes
Route::prefix('setups')->group(function(){
	Route::get('/assign/subject/view','AssignSubjectController@view')->name('assign.subject.view');
	Route::get('/assign/subject/add','AssignSubjectController@add')->name('assign.subject.add');
	Route::get('/assign/subject/edit/{class_id}','AssignSubjectController@edit')->name('assign.subject.edit');
	Route::post('/assign/subject/update/{class_id}','AssignSubjectController@update')->name('assign.subject.update');
	Route::post('/assign/subject/store','AssignSubjectController@store')->name('assign.subject.store');
	Route::get('/assign/subject/details/{class_id}','AssignSubjectController@details')->name('assign.subject.details');
});

//Designation routes
Route::prefix('setups')->group(function(){
	Route::get('/designation/view','DesignationController@view')->name('setups.designation.view');
	Route::get('/designation/add','DesignationController@add')->name('setups.designation.add');
	Route::get('/designation/edit/{id}','DesignationController@edit')->name('setups.designation.edit');
	Route::post('/designation/update/{id}','DesignationController@update')->name('setups.designation.update');
	Route::post('/designation/store','DesignationController@store')->name('setups.designation.store');
	Route::get('/designation/delete/{id}','DesignationController@delete')->name('setups.designation.delete');
});

//Student Registraion  routes
Route::prefix('students')->group(function(){
	Route::get('/view','StudentRegController@view')->name('students.view');
	Route::get('/add','StudentRegController@add')->name('students.add');
	Route::get('/edit/{student_id}','StudentRegController@edit')->name('students.edit');
	Route::post('/update/{student_id}','StudentRegController@update')->name('students.update');
	Route::post('/store','StudentRegController@store')->name('students.store');
	Route::get('/class-year-wise','StudentRegController@classYearWise')->name('students.class.year.search');
	Route::get('/promotion/{student_id}','StudentRegController@promotion')->name('students.promotion');
	Route::post('/promotion/{student_id}','StudentRegController@promotionStore')->name('students.promotion.store');
	Route::get('/details/{student_id}','StudentRegController@details')->name('students.details');

	//Student Roll Generate
	Route::get('/roll/view','StudentRollController@view')->name('students.roll.view');
	Route::get('/roll/get-student','StudentRollController@getStudent')->name('students.get_student');
	Route::post('/roll/store','StudentRollController@rollStore')->name('students.roll.store');
	
});


Route::prefix('fees')->group(function(){
	//Student Registration Fee Route
	Route::get('/reg/fee/view','RegFeeController@view')->name('reg.fee.view');
	Route::get('/reg/getstudent','RegFeeController@getStudent')->name('students.reg.fee');
	Route::get('/reg/fee/payslip','RegFeeController@payslip')->name('student.fee.payslip');
	//Student Monthly Fee Route
	Route::get('/monthly/fee/view','MonthlyFeeController@view')->name('monthly.fee.view');
	Route::get('/monthly/getstudent','MonthlyFeeController@getStudent')->name('students.monthly.fee');
	Route::get('/monthly/fee/payslip','MonthlyFeeController@payslip')->name('monthly.fee.payslip');
	//Student Exam Fee Route
	Route::get('/exam/fee/view','ExamFeeController@view')->name('exam.fee.view');
	Route::get('/exam/getstudent','ExamFeeController@getStudent')->name('students.exam.fee');
	Route::get('/exam/fee/payslip','ExamFeeController@payslip')->name('exam.fee.payslip');
});

//Employee routes
Route::prefix('employee')->group(function(){

	Route::get('/view','EmployeeRegController@view')->name('employee.view');
	Route::get('/add','EmployeeRegController@add')->name('employee.add');
	Route::get('/edit/{id}','EmployeeRegController@edit')->name('employee.edit');
	Route::post('/update/{id}','EmployeeRegController@update')->name('employee.update');
	Route::post('/store','EmployeeRegController@store')->name('employee.store');
	Route::get('/details/{id}','EmployeeRegController@details')->name('employee.details');

	

});
Route::prefix('employee')->group(function(){
	Route::get('/salary/view','EmployeeSalaryController@view')->name('employee.salary.view');
	Route::get('/salary/increment/{id}','EmployeeSalaryController@increment')->name('employee.salary.increment');
	Route::post('/salary/store/{id}','EmployeeSalaryController@store')->name('employee.salary.store');
	Route::get('/salary/details/{id}','EmployeeSalaryController@details')->name('employee.salary.details');

});

//Marks entry route
Route::prefix('marks')->group(function(){
	Route::get('/add','MarksController@view')->name('marks.add');
	Route::get('/get-student','MarksController@getStudent')->name('marks.get.student');
	Route::post('/store','MarksController@store')->name('marks.store');
	Route::get('/data','MarksController@data')->name('marks.data');
	Route::get('/details/{student_id}','MarksController@details')->name('marks.details');
	
// 	Route::post('/store','MarksController@store')->name('marks.store');
// //default conntroller
// Route::get('/get-subject','DefaultController@getSubject')->name('marks.get-subject');
// Route::get('/get-student','DefaultController@getStudent')->name('marks.get-student');

//Student Result Route
	Route::get('get-result','MarksController@getResult')->name('get.result');
	Route::get('get-result-view','MarksController@getResultView')->name('get.result.view');
});

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
