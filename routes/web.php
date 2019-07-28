<?php

//Index page all posts
Route::get('/','IndexController@allJobs');



// applicant registration page
Route::get('/applicant-registration','UsersController@applicantRegistration');
// applicant Register Form Submit
Route::post('/applicant-register','UsersController@register');

//applicant login
Route::match(['GET','POST'],'/applicant-login','UsersController@login');

//applicant job apply
Route::post('/apply/job/{id}','JobController@applyJobs');

//applicant after lofin
Route::group(['middleware' => ['applicantlogin']], function () {
	Route::get('/applicant/dashboard','UsersController@dashboard');
  //Update Profile
  Route::match(['GET','POST'],'/applicant/dashboard/{id}/updateProfile','UsersController@updateProfile');
  //Update Skills
  Route::match(['GET','POST'],'/applicant/dashboard/{id}/skills','UsersController@updateSkills');
});
//applicant Logout
Route::get('/logout','UsersController@logout');



// Employer registration page
Route::get('/employer-registration','EmployerController@employerRegistration');
// Employer Register Form Submit
Route::post('/employer-register','EmployerController@employerRegister');
// Employer Login
Route::match(['GET','POST'],'/employer-login','EmployerController@login');
// view Applicant as a employer
Route::get('/employer/dashboard/applicant','EmployerController@viewApplicant');

//employer after lofin
  Route::group(['middleware' => ['employerlogin']], function () {
  	Route::get('/employer/dashboard','EmployerController@dashboard');
    Route::match(['GET','POST'],'/employer/dashboard/{id}/jobpost','EmployerController@jobpost');

    });
Route::get('/logout','EmployerController@logout');
