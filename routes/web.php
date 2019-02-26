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
/*
 * ==============================+===============================
 * Developed By : ANDREW AKRAM ALBERT ZAKI
 * Contact Me At:
 * Email : andrewalbert93501@gmail.com
 * Phone : +2 011 28 5700 38
 * LinkedIn : https://www.linkedin.com/in/andrew-akram-2167a0154/
 * ==============================+===============================
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

//the index page of site
Route::get('/','Controller@index');

//-----------------------------------------------------------------
//-----------------------------------------------------------------
//go to all_clients page
Route::get('/all/clients',"ClientController@all_clients");

//go to add client page
Route::get('/add/client',"ClientController@add_client");

//go to add_new_client
Route::post('/add/new/client',"ClientController@insert_client");

//go to edit_client page
Route::get('/edit/client/{c_id}',"ClientController@edit_client");

//go to update_client
Route::post('/update/client/{c_id}',"ClientController@update_client");

//go to delete_client
Route::get('/delete/client/{c_id}',"ClientController@delete_client");
//-----------------------------------------------------------------
//-----------------------------------------------------------------
//go to all_services page
Route::get('/all/services',"ServiceController@all_services");

//go to add service page
Route::get('/add/service',"ServiceController@add_service");

//go to add_new_service
Route::post('/add/new/service',"ServiceController@insert_service");

//go to edit_service page
Route::get('/edit/service/{s_id}',"ServiceController@edit_service");

//go to update_service
Route::post('/update/service/{s_id}',"ServiceController@update_service");

//go to delete_service
Route::get('/delete/service/{s_id}',"ServiceController@delete_service");

//////////////////////////////////////////
Route::get('/manage/services/{c_id}',"ClientserviceController@manage_services");

//////////////////////////////////////////
Route::post('/update/clientservices/{c_id}',"ClientserviceController@update_clientservice");



