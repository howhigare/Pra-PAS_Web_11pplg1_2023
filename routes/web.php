<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantsController;
use App\Http\Controllers\AnimalsController;

// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |
// */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "tittle" => 'home'
    ]);
});

Route:: get('/plant/all', [PlantsController::class, 'index1']);
Route:: get('/animal/semua', [AnimalsController::class, 'index2']);

Route::get('/nature/detail/{plant}',[PlantsController::class,'show']);
Route::get('/nature/detailh/{animal}',[AnimalsController::class,'show']);