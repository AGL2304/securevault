<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\PageController;



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

Route::get('/', function () {
    return view('welcome');
})->withoutMiddleware(['web']); // Contourne le middleware web si nécessaire

Route::get('/test', function () {
    return view('welcome');
})->name('home')
  ->withoutMiddleware(['web']); // Contourne le middleware web

Route::get('/test2', fn() => 'Tinker fonctionne !')
    ->name('test2')
    ->withoutMiddleware(['web']); // Contourne le middleware web

Route::get('/simple', fn() => 'Pas de session ici !')
    ->withoutMiddleware(['web']); // Contourne le middleware web

Route::get('/test-tinker', fn() => 'Tinker fonctionne !')
    ->withoutMiddleware(['web']); // Déjà contourné

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')
  ->withoutMiddleware(['web', 'auth', \Illuminate\Session\Middleware\StartSession::class, Illuminate\Session\SessionManager::class]); // Contourne les middlewares web et auth



Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::resource('users', UserController::class)->middleware(['auth','admin']);
Route::resource('files', FileController::class)->middleware(['auth']);
Route::get('audits', [AuditController::class,'index'])->middleware(['auth'])->name('audits.index');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



Route::get('/users', [UserController::class, 'index'])->name('users.index');



Route::get('/features', [PageController::class, 'features'])->name('features');
Route::get('/security', [PageController::class, 'security'])->name('security');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');


require __DIR__.'/auth.php';
