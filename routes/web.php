<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentGroupController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController;

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

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('students', StudentController::class)->middleware(['auth']);
Route::resource('studentGroups', StudentGroupController::class)->middleware(['auth']);
Route::resource('rayons', RayonController::class)->middleware(['auth']);
Route::resource('publishers', PublisherController::class)->middleware(['auth']);
Route::resource('books', BookController::class)->middleware(['auth']);
Route::resource('borrowings', BorrowingController::class)->middleware(['auth']);

require __DIR__.'/auth.php';


// <?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LoginController;
// use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('admin.index');
// });

// Route::get('/login', function () {
//     return view('admin.login');
// });

// Route::get('/rombels', function(){
//     return view('rombels.index');
// });

// Route::get('/rayons', function(){
//     return view('rayons.index');
// });

// Route::get('/rayons', function(){
//     return view('rayons.index');
// });

// Route::post('/login', [LoginController::class, 'authenticate']);

// Route::get('/dashboard', function(){
//     return view('dashboard.index');
// });
