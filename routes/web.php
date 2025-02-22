<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProductController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';




Route::get('/dashboard', function () {
    return view('dashboard', [
        'users' => User::where('id', '!=', Auth::id())->get()
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/chat/{user}', function (User $user) {
    return view('chat', [
        'user' => $user
    ]);
})->middleware(['auth', 'verified'])->name('chat');

Route::resource(
    'messages/{user}',
    ChatController::class,
    ['only' => ['index', 'store']]
)->middleware(['auth']);



Route::get('/products', [ProductController::class, 'index'])->name('product.index');

