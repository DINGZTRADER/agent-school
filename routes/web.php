<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

use App\Models\Announcement;
use App\Models\Student;
use App\Models\Guardian;
use App\Models\Classes;

Route::get('/dashboard', function () {
    $announcements = Announcement::with('user')->latest()->take(5)->get();
    $studentCount = Student::count();
    $guardianCount = Guardian::count();
    $classCount = Classes::count();
    $latestStudents = Student::latest()->take(5)->get();
    $latestGuardians = Guardian::latest()->take(5)->get();

    return view('dashboard', compact('announcements', 'studentCount', 'guardianCount', 'classCount', 'latestStudents', 'latestGuardians'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:Owner,Headmaster'])->group(function () {
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::resource('announcements', AnnouncementController::class);
});

require __DIR__.'/auth.php';
