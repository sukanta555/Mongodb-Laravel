<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use App\Models\employees;


Route::get('/', function () {
    $emp=employees::all();
        dd($emp);
    return view('welcome');
});


// Route::get('/test-database-connection', function () {
//     try {
//         DB::connection()->getPdo();
//         return "Database connection established successfully!";
//     } catch (\Exception $e) {
//         return "Unable to connect to the database. Error: " . $e->getMessage();
//     }
// });

// Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('admin.home');
Route::get('admin/add_users', [UserController::class, 'index'])->name('admin.add_users');
Route::post('admin/store', [UserController::class, 'store'])->name('admin.store');

Route::get('admin/show', [UserController::class, 'show'])->name('admin.users');
// Route::get('admin/user/{id}', [UserController::class, 'user'])->name('admin.user');
// Route::get('admin/edit/{id}', [UserController::class, 'edit'])->name('admin.edit');
// Route::post('admin/update/{id}', [UserController::class, 'update'])->name('admin.update');
// Route::get('admin/delete/{id}', [UserController::class, 'destroy'])->name('admin.delete');