<?php

//redirect

Route::redirect('/','en');

// General Pages

Route::group(['prefix' => '{lang}'], function (){

Route::get('/','UserController@index')->name('index');
Route::get('turkey','UserController@turkey')->name('turkey');
Route::get('aboutus','UserController@aboutus')->name('aboutus');
Route::get('study_abroad','UserController@study_abroad')->name('study_abroad');
Route::get('study_english','UserController@study_english')->name('study_english');
Route::get('immigration','UserController@immigration')->name('immigration');
Route::get('citizenship','UserController@citizenship')->name('citizenship');
Route::get('medical_education','UserController@medical_education')->name('medical_education');
Route::get('newsandevents','UserController@newsandevents')->name('newsandevents');
Route::get('study_in_uk','UserController@study_in_uk')->name('study_in_uk');
Route::get('study_in_usa','UserController@study_in_usa')->name('study_in_usa');
Route::get('study_in_australia','UserController@study_in_australia')->name('study_in_australia');
Route::get('study_in_newzealand','UserController@study_in_newzealand')->name('study_in_newzealand');
Route::get('study_in_canada','UserController@study_in_canada')->name('study_in_canada');
Route::get('study_in_ireland','UserController@study_in_ireland')->name('study_in_ireland');
Route::get('study_in_middleeast','UserController@study_in_middleeast')->name('study_in_middleeast');
Route::post('getquerydata','UserController@getquerydata')->name('getquerydata');
Route::post('getassessmentdata','UserController@getassessmentdata')->name('getassessmentdata');
Route::get('contactus','UserController@contactus')->name('contactus');
Route::post('subscribe_newsletter','UserController@subscribe_newsletter')->name('subscribe_newsletter');


// Search Country
Route::post('countryselected','UniversityController@countryselected')->name('countryselected');


// Search University
Route::get('ukuniversities','UniversityController@ukuniversities')->name('ukuniversities');
Route::get('nzuniversities','UniversityController@nzuniversities')->name('nzuniversities');
Route::get('ausuniversities','UniversityController@ausuniversities')->name('ausuniversities');
Route::get('canadauniversities','UniversityController@canadauniversities')->name('canadauniversities');
Route::get('irelanduniversities','UniversityController@irelanduniversities')->name('irelanduniversities');
Route::get('middleeastuniversities','UniversityController@middleeastuniversities')->name('middleeastuniversities');
Route::get('usauniversities','UniversityController@usauniversities')->name('usauniversities');

// Selected Course Apply
// UK
Route::get('ukselectedcourse/{id}','UniversityController@ukselectedcourse')->name('ukselectedcourse');
Route::post('getukselecteduniversitydata','UniversityController@getukselecteduniversitydata')->name('getukselecteduniversitydata');
// New Zealand
Route::get('nzselectedcourse/{id}','UniversityController@nzselectedcourse')->name('nzselectedcourse');
Route::post('getnzselecteduniversitydata','UniversityController@getnzselecteduniversitydata')->name('getnzselecteduniversitydata');
// Australia
Route::get('ausselectedcourse/{id}','UniversityController@ausselectedcourse')->name('ausselectedcourse');
Route::post('getausselecteduniversitydata','UniversityController@getausselecteduniversitydata')->name('getausselecteduniversitydata');

// Canada
Route::get('canadaselectedcourse/{id}','UniversityController@canadaselectedcourse')->name('canadaselectedcourse');
Route::post('getcanadaselecteduniversitydata','UniversityController@getcanadaselecteduniversitydata')->name('getcanadaselecteduniversitydata');

// Ireland
Route::get('irelandselectedcourse/{id}','UniversityController@irelandselectedcourse')->name('irelandselectedcourse');
Route::post('getirelandselecteduniversitydata','UniversityController@getirelandselecteduniversitydata')->name('getirelandselecteduniversitydata');

// Middle East
Route::get('middleeastselectedcourse/{id}','UniversityController@middleeastselectedcourse')->name('middleeastselectedcourse');
Route::post('getmiddleeastselecteduniversitydata','UniversityController@getmiddleeastselecteduniversitydata')->name('getmiddleeastselecteduniversitydata');

// Usa
Route::get('usaselectedcourse/{id}','UniversityController@usaselectedcourse')->name('usaselectedcourse');
Route::post('getusaselecteduniversitydata','UniversityController@getusaselecteduniversitydata')->name('getusaselecteduniversitydata');

// Thank you page 

Route::get('thankyou','UniversityController@thankyou')->name('thankyou');
Route::get('formsubmit','UserController@formsubmit')->name('formsubmit');


//Blogs Route
Route::get('canadian_way_of_life','BlogController@canadian_way_of_life')->name('canadian_way_of_life');
Route::get('pakistani_student_canada','BlogController@pakistani_student_canada')->name('pakistani_student_canada');
Route::get('february_roadshow','BlogController@february_roadshow')->name('february_roadshow');
Route::get('phd_roadshow','BlogController@phd_roadshow')->name('phd_roadshow');
Route::get('facts_about_studying_in_australia','BlogController@facts_about_studying_in_australia')->name('facts_about_studying_in_australia');
Route::get('after_graduation','BlogController@after_graduation')->name('after_graduation');
Route::get('second_passport','BlogController@second_passport')->name('second_passport');
Route::get('why_we_immigrate_to_canada','BlogController@why_we_immigrate_to_canada')->name('why_we_immigrate_to_canada');
Route::get('usf_scholarship','BlogController@usf_scholarship')->name('usf_scholarship');
Route::get('why_study_in_the_uk','BlogController@why_study_in_the_uk')->name('why_study_in_the_uk');
Route::get('uk_education_system','BlogController@uk_education_system')->name('uk_education_system');
Route::get('overcoming_challenges_for_international_students','BlogController@overcoming_challenges_for_international_students')->name('overcoming_challenges_for_international_students');
Route::get('things_to_know_before_studying_abroad_in_new_zealand','BlogController@things_to_know_before_studying_abroad_in_new_zealand')->name('things_to_know_before_studying_abroad_in_new_zealand');
Route::get('women_only','BlogController@women_only')->name('women_only');
Route::get('kaplan_event_calender','BlogController@kaplan_event_calender')->name('kaplan_event_calender');
Route::get('scholarship_in_uk','BlogController@scholarship_in_uk')->name('scholarship_in_uk');
Route::get('dual_citizenship','BlogController@dual_citizenship')->name('dual_citizenship');
Route::get('why_canada_needs_immigration','BlogController@why_canada_needs_immigration')->name('why_canada_needs_immigration');
Route::get('graduate_immigration_route','BlogController@graduate_immigration_route')->name('graduate_immigration_route');

/* Landing Pages */
Route::get('kaplan_march_sale','UserController@kaplan_march_sale')->name('kaplan_march_sale');
Route::get('kaplan_biochemistry_lecture','UserController@kaplan_biochemistry_lecture')->name('kaplan_biochemistry_lecture');




/* Immigration Entries */
Route::get('immigration_entries','UserController@immigration_entries')->name('immigration_entries');
Route::get('general_entries','UserController@general_entries')->name('general_entries');
Route::get('immigration-to-canada','UserController@immigration_to_canada')->name('immigration_to_canada');


Auth::routes();




// Admin Panel
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/viewuser','HomeController@viewuser')->name('viewuser');
Route::get('/viewuniversities','HomeController@viewuniversities')->name('viewuniversities');
Route::get('deleteuser/{id}','HomeController@deleteuser')->name('deleteuser');
Route::get('pendinguser/{id}','HomeController@pendinguser')->name('pendinguser');
Route::get('pendingaccounts','HomeController@pendingaccounts')->name('pendingaccounts');
Route::get('adminviewcourses','HomeController@adminviewcourses')->name('adminviewcourses');
Route::get('generalinquiry','HomeController@generalinquiry')->name('generalinquiry');
Route::get('immigrationinquiry','HomeController@immigrationinquiry')->name('immigrationinquiry');
Route::get('deletegeneralquery/{id}','HomeController@deletegeneralquery')->name('deletegeneralquery');
Route::get('deleteimmigrationquery/{id}','HomeController@deleteimmigrationquery')->name('deleteimmigrationquery');
Route::get('viewgeneralquery/{id}','HomeController@viewgeneralquery')->name('viewgeneralquery');
Route::get('viewimmigrationquery/{id}','HomeController@viewimmigrationquery')->name('viewimmigrationquery');
Route::get('completegeneralquery/{id}','HomeController@completegeneralquery')->name('completegeneralquery');
Route::get('completeimmigrationquery/{id}','HomeController@completeimmigrationquery')->name('completeimmigrationquery');
Route::post('assignrole','HomeController@assignrole')->name('assignrole');


// University Panel
Route::get('adduniversity','HomeController@adduniversity')->name('adduniversity');
Route::post('universitydata','HomeController@universitydata')->name('universitydata');
Route::get('confirm','HomeController@confirm')->name('confirm');
Route::get('previewuniversity/{id}','HomeController@previewuniversity')->name('previewuniversity');
Route::get('deleteuniversity/{id}','HomeController@deleteuniversity')->name('deleteuniversity');
Route::get('universitydetail','HomeController@universitydetail')->name('universitydetail');
Route::post('updateuniversitydata','HomeController@updateuniversitydata')->name('updateuniversitydata');
Route::get('addcourse','HomeController@addcourse')->name('addcourse');
Route::post('coursedata','HomeController@coursedata')->name('coursedata');
Route::get('viewcourse','HomeController@viewcourse')->name('viewcourse');
Route::get('deletecourse/{id}','HomeController@deletecourse')->name('deletecourse');


});









