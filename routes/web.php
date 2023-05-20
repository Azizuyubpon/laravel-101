<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;


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
    return view('home');
});

Route::post('/register', [UserController::class, 'register']);


Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'employeeForm'])->name('employee.create');

Route::post('/employee', [App\Http\Controllers\EmployeeController::class, 'employeeSubmit'])->name('employee.store');

Route::get('/employee/{id}', [App\Http\Controllers\EmployeeController::class, 'show'])->name('employee.show');

Route::get('/car', [CarController::class, 'index'])->name('car.create');

Route::post('/car', [CarController::class, 'carSubmit'])->name('car.store');

Route::get('/car/{id}', [CarController::class, 'show'])->name('car.show');

Route::get('/section', [App\Http\Controllers\SectionController::class, 'sectionForm'])->name('section.create');

Route::post('/section', [App\Http\Controllers\SectionController::class, 'sectionSubmit'])->name('section.store');

Route::get('/section/{id}', [App\Http\Controllers\SectionController::class, 'show'])->name('section.show');

Route::get('/subject', [App\Http\Controllers\SubjectController::class, 'subjectForm'])->name('subject.create');

Route::post('/subject', [App\Http\Controllers\SubjectController::class, 'subjectSubmit'])->name('subject.store');

Route::get('/subject/{id}', [App\Http\Controllers\SubjectController::class, 'show'])->name('subject.show');