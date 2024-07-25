<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
//use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CallController;


/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
|-------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

/*
|----------------------------------------------------------
| Adminlar ko'raoladigan qism
|--------------------------------------------------------------------------
*/

Route::middleware(['checkRole:admin', 'auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'admin'])->name('admin');
        Route::resource('abouts', AboutController::class);
        Route::resource('partners', PartnerController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('portfolios', PortfolioController::class);
        Route::resource('teams', TeamController::class);
        Route::resource('logos', LogoController::class);
        Route::resource('calls', CallController::class);
//        Route::get('/profile', [UserController::class, 'index'])->name('user-index');
//        Route::resource('/profile', UserController::class);
        Route::resource('contacts', ContactController::class);
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});


/*
|--------------------------------------------------------------------------
| Barcha foydalanuvshilar ko'raoladigan qism
|-------------------------------------------------------------
*/

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/brief', [MainController::class, 'brief'])->name('brief');
Route::get('/callcus', [CallController::class, 'create'])->name('call');
Route::post('/callcus', [CallController::class, 'store'])->name('callcus.store');
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/{portfolio}', [MainController::class, 'singlePortfolio'])->name('singlePortfolio');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::get('/{lang}', function ($lang){

    session(['lang' => $lang]);

    return back();
})->where('lang', '(ru|uz|en)');
