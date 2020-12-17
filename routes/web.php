<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenIsValid;

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

Route::middleware([EnsureTokenIsValid::class])->group(function () {
    Route::get('/test', function () {
        return view('employee');
    });
    Route::get('/', function () {
        return view('login');
    });
    Route::match(['get', 'post'], '/dashboard', function () {
        return view('dashboard');
    });
    Route::get('employee', function () {
        return view('employee');
    });
    Route::get('holiday', function () {
        return view('holiday');
    });
    Route::get('attendance', function () {
        return view('attendance');
    });
    Route::get('mission', function () {
        return view('mission');
    });
    Route::get('department', function () {
        return view('department');
    });
    Route::get('position', function () {
        return view('position');
    });
    Route::get('overtime', function () {
        return view('overtime');
    });
    Route::get('warning_and_punishment', function () {
        return view('warning_and_punishment');
    });
    Route::get('resigned_employee', function () {
        return view('resigned_employee');
    });
    Route::get('profile', function () {
        return view('profile');
    });
    Route::get('candidate', function () {
        return view('candidate');
    });
    Route::get('question', function () {
        return view('question');
    });
    Route::get('module', function () {
        return view('module.module');
    });
    // setting
        Route::get('role', function () {
            return view('setting.role');
        });
        Route::get('change_password', function () {
            return view('setting.change_password');
        });
        Route::get('leave_type', function () {
            return view('setting.leave_type');
        });
    // end setting
});

Route::get('/login','LoginController@index');


