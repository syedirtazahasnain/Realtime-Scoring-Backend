<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TournamentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('users',UserController::class);
Route::resource('groups', GroupController::class);
Route::resource('teams', TeamController::class);
Route::resource('matches', MatchController::class);
Route::resource('tournaments', TournamentController::class);

Route::get('tournaments/{tournament}/group/{group}', [MatchController::class, 'groupMatches'])
    ->name('matches.group');
Route::get('tournaments/{tournament}/knockout', [MatchController::class, 'knockoutStage'])
    ->name('matches.knockout');

// When creating a match with tournament preselected
Route::get('matches/create', [MatchController::class, 'create'])
    ->name('matches.create')
    ->defaults('tournament_id', null);


Route::post('/teams/{team}/members', [TeamController::class, 'addMember']);
Route::delete('/teams/{team}/members/{user}', [TeamController::class, 'removeMember']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Example protected route for admin role
    Route::middleware('role:admin')->group(function () {
        Route::get('/admin', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
    });
});


require __DIR__.'/auth.php';
