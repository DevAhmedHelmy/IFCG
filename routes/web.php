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

Route::get('/', function () {
    return view('admin.layouts.app');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth'])->group(function(){
    Route::resources([
            'roles'                 =>'Role\RoleController',
            'employees'             => 'Employee\EmployeeController',
        ]);

    Route::namespace('HygieneInspection')->group(function () {
        // Controllers Within The 'App\Http\Controllers\HygieneInspection' Namespace
        Route::get('hygieneInspections/report/daily', 'HygieneInspectionReportController@daily')->name('hygieneInspections.daily');
        Route::get('hygieneInspections/report', 'HygieneInspectionReportController@index')->name('hygieneInspections.report');
        Route::get('hygieneInspections/report/search', 'HygieneInspectionReportController@search')->name('hygieneInspections.search');
        Route::get('hygieneInspections/report/result', 'HygieneInspectionReportController@result')->name('hygieneInspections.result');
        Route::resource('hygieneInspections', 'HygieneInspectionController');

    });

});

