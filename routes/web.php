<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;

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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/view-event', [EventController::class, 'viewEvent']);
Route::get('/create-event', [EventController::class, 'createEvent']);

Route::get('/view-ticket', [TicketController::class, 'viewAllTicket']);
Route::get('/create-ticket/{id}', [TicketController::class, 'store']);

Route::get('/admin-view-event', [EventController::class, 'viewadminEvent']);
Route::post('/store-event', [EventController::class, 'store']);

require __DIR__.'/auth.php';
