<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\QuestionsController;
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
    return view('home');
});

Route::get('/login2', function () {
    return view('login2');});
    Route::get('/resultSummary', function () {
        return view('/resultSummary');});
        Route::get('/questions', [QuestionsController::class, 'index']);
        Route::get('/signup2', function () {
    return view('signup2');}); 
    Route::post('/signup2', [SignupController::class, 'register']);
    Route::post('/login2', [SignupController::class, 'login']);
    Route::post('/logout', [SignupController::class, 'logout']);
    Route::get('/createQuiz/{create}', [QuestionsController::class, 'createQuiz']);
Route::get('/userdashboard', [SignupController::class, 'dashboard'])->middleware('auth');
 Route::get('/viewquestions/{post}', [QuestionsController::class, 'showQuiz']);
Route::get('/art', [QuestionsController::class, 'question']);
Route::post('/quiz/{user}', [QuestionsController::class, 'create']);
Route::post('/art', [QuestionsController::class, 'mark']);
Route::get('/categories', [QuestionsController::class, 'category']);
Route::get('/profile/{profile:Username}', [UserController::class, 'profile']);
Route::get('/analytics/{quizs:Username}', [UserController::class, 'analysis']);
Route::get('/analytics', [UserController::class, 'quiz']);
Route::get('/category/{category}', [QuestionsController::class, 'quizs']);
Route::post('/questions', [QuestionsController::class, 'questions']);
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
