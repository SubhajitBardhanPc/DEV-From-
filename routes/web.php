<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\FormController;
use App\Http\Controllers\UserAuthController;


use App\Http\Controllers\AdminController;  

// 🏠 Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// 📢 Notice Page
Route::get('/notice', function () {
    return view('notice');
})->name('notice.index');

// 👤 User Auth (Login/Register UI)
Route::get('/user/auth', function () {
    return view('user_auth');
})->name('user.auth');

// ✅ User Registration
Route::post('/user/register', [UserAuthController::class, 'register'])->name('user.register');

// 🔐 User Login
Route::post('/user/login', [UserAuthController::class, 'login'])->name('user.login');

// 🔓 User Logout
Route::get('/user/logout', [UserAuthController::class, 'logout'])->name('user.logout');

// 📞 Contact Page
Route::get('/contact', function () {
    return view('contact');
});


Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// Admin dashboard route
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Route to delete a gate form
Route::delete('/admin/delete-form/{id}', [AdminController::class, 'deleteForm'])->name('admin.deleteForm');




// User Registration Routes
Route::get('/register', [UserAuthController::class, 'showRegisterForm'])->name('user.register');
Route::post('/register', [UserAuthController::class, 'register']);

// User Login Routes
Route::get('/login', [UserAuthController::class, 'showLoginForm'])->name('user.login');
Route::post('/login', [UserAuthController::class, 'login']);

// User Logout Route
Route::post('/logout', [UserAuthController::class, 'logout'])->name('user.logout');

// Show the form


Route::get('/form', [FormController::class, 'showForm'])->name('form.show');
Route::post('/form', [FormController::class, 'submitForm'])->name('form.submit');



// Display the form
Route::get('/submit-form', function () {
    return view('exam_data_form');
})->name('form.view');  // This route is for displaying the form view

// Handle form submission
Route::post('/submit-form', [FormController::class, 'submitForm'])->name('form.submit');


use App\Http\Controllers\FormController;

Route::get('/exam-form', [FormController::class, 'showForm'])->name('form.show');
Route::post('/submit-exam-form', [FormController::class, 'submitForm'])->name('form.submit');




Route::get('/admin/exam-data', [FormController::class, 'showAllExamData'])->name('admin.exam_data');











// Add this route in your web.php
use App\Http\Controllers\AdmitCardController;

// Route to show the admit card form (GET request)
Route::get('/admit-card', function () {
    return view('admit_card_form'); // This is the form where users input name and dob
})->name('admit.card.form');

// Route to handle form submission and fetch the admit card (POST request)
Route::post('/fetch-admit-card', [AdmitCardController::class, 'fetchAdmitCard'])->name('fetch.admit.card');
