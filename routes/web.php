<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SubmissionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[AuthController::class,'index']);


Route::get('/admin.Deposit', [SubmissionController::class, 'index'])->name('submissions.index');
Route::delete('/submission/{id}', [SubmissionController::class,'destroy'])->name('submission.destroy');
Route::get('/submission/search', [SubmissionController::class, 'search'])->name('submission.search');


Route::get('/admin.car', [SubmissionController::class, 'index_car'])->name('submissions.index_car');
Route::delete('/submission_car/{id}', [SubmissionController::class,'destroy_car'])->name('submission.destroy_car');
Route::get('/submission/search_car', [SubmissionController::class, 'search_car'])->name('submission.search_car');


Route::get('/admin.lost-and-found', [SubmissionController::class, 'index_lost_and_found'])->name('submissions.index_lost_and_found');
Route::delete('/submission_lost_and_found/{id}', [SubmissionController::class,'destroy_lost_and_found'])->name('submission.destroy_lost_and_found');
Route::get('/submission_lost_and_found/search', [SubmissionController::class, 'search_lost_and_found'])->name('submission.search_lost_and_found');


Route::get('login',[AuthController::class,'login']);
Route::post('/submit',[AuthController::class,'auth_login'])->name('student.login');


Route::get('register',[AuthController::class,'register']);
Route::post('register',[AuthController::class,'create_user']);


Route::get('Deposit',[AuthController::class,'Deposit']);
Route::get('Deposit_arabic',[AuthController::class,'Deposit_arabic']);
Route::post('Deposit',[FormController::class,'create_form'])->name('/form'); 
Route::post('Deposit_arabic',[FormController::class,'create_form'])->name('/form_ar'); 


Route::get('lost-and-found',[AuthController::class,'lost_and_found']);
Route::post('lost-and-found',[FormController::class,'create_form3'])->name('/form3');
Route::get('lost-and-found-arabic',[AuthController::class,'lost_and_found_arabic']);
Route::post('lost-and-found-arabic',[FormController::class,'create_form3'])->name('/form3_ar');


Route::get('cars',[AuthController::class,'cars']);
Route::post('cars',[FormController::class,'create_form2'])->name('/form2');
Route::get('car_arabic',[AuthController::class,'car_arabic']);
Route::post('car_arabic',[FormController::class,'create_form2'])->name('/form2_ar');
