<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TournamentController;

Route::get('/', [GeneralController::class,'home']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('groups', GroupController::class);
    Route::resource('teams', TeamController::class);
    Route::resource('matches', MatchController::class);
    Route::resource('tournaments', TournamentController::class);
    Route::resource('blogs', BlogController::class);

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

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/palyer-profile', [ProfileController::class, 'playerRegistration'])->name('register.player');
    Route::patch('/profile/update-avatar', [ProfileController::class, 'updateAvatar'])->name('profile.update-avatar');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/player-profile/update', [ProfileController::class, 'storePlayerForm'])->name('player-profile.update');

    // Example protected route for admin role
    Route::middleware('role:admin')->group(function () {
        Route::get('/admin', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
    });
});

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('/matches-view', function () {
    return view('matches');
})->name('t1.matches');
Route::get('/ranking', function () {
    return view('ranking');
})->name('ranking');
Route::get('/news', function () {
    return view('news');
})->name('news');
Route::get('/teams-view', function () {
    return view('teams');
})->name('t1.teams');
Route::get('newpage', function () {
    return view('newpage');
})->name('newpage');
Route::get('/players', function () {
    return view('players');
})->name('players');
Route::get('/drafting', function () {
    return view('drafting');
})->name('drafting');
Route::get('/videos', function () {
    return view('videos');
})->name('videos');





require __DIR__ . '/auth.php';
