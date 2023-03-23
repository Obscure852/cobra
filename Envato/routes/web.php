<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/home', [HomeController::class,'index'])->name('home');
    Route::get('/profile',[HomeController::class,'profile'])->name('profile');
    Route::get('/lockscreen',[HomeController::class,'lockscreen'])->name('auth-lock-screen');
    Route::get('/logout',[HomeController::class,'logout'])->name('logout');

    Route::get('/calendar',[HomeController::class,'calendar'])->name('calendar');

    Route::get('/contacts-list',[HomeController::class,'contactsList'])->name('contacts-list');
    Route::get('/fontAwesome',[HomeController::class,'fontAwesome'])->name('fontAwesome');
    Route::get('/pricing',[HomeController::class,'pricing'])->name('pricing');
    Route::get('/datatables',[HomeController::class,'datatables'])->name('datatables');
    Route::get('/boxicons',[HomeController::class,'boxicons'])->name('boxicons');

    Route::get('/invoices-list',[HomeController::class,'invoiceList'])->name('invoices-list');
    Route::get('/icons-dripicons',[HomeController::class,'dripIcons'])->name('dripicons');
    Route::get('/icons-materialdesign',[HomeController::class,'materialIcons'])->name('materialIcons');

});


