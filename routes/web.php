<?php

//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\PresentController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ImageController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\Jissyu3_1Controller;
use App\Http\Controllers\MainpageController;
use App\Http\Controllers\HelloaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/flower', [FlowerController::class, 'index']);
Route::get('/flower/show', [FlowerController::class, 'show']);
Route::get('/flower/edit', [FlowerController::class, 'edit']);
Route::post('/flower/edit', [FlowerController::class, 'update']);

Route::get('/player', [PlayerController::class, 'index']);
Route::get('/player/show', [PlayerController::class, 'show']);
Route::get('/player/add', [PlayerController::class, 'add']);
Route::post('/player/add', [PlayerController::class, 'create']);
Route::get('/player/del', [PlayerController::class, 'del']);
Route::post('/player/del', [PlayerController::class, 'remove']);
Route::get('/player/edit', [PlayerController::class, 'edit']);
Route::post('/player/edit', [PlayerController::class, 'update']);

Route::get('/map', [MapController::class, 'index']);
Route::get('/map/show', [MapController::class, 'show']);
Route::get('/map/add', [MapController::class, 'add']);
Route::post('/map/add', [MapController::class, 'create']);
Route::get('/map/edit', [MapController::class, 'edit']);
Route::post('/map/edit', [MapController::class, 'update']);
Route::get('/map/del', [MapController::class, 'del']);
Route::post('/map/del', [MapController::class, 'remove']);

//Route::post('/map/confirm', [MapController::class, 'postImageComplete']);

Route::get('/present', [PresentController::class, 'index']);
Route::get('/present/show', [PresentController::class, 'show']);
Route::get('/present/add', [PresentController::class, 'add']);
Route::post('/present/add', [PresentController::class, 'create']);
Route::get('/present/edit', [PresentController::class, 'edit']);
Route::post('/present/edit', [PresentController::class, 'update']);
Route::get('/present/del', [PresentController::class, 'del']);
Route::post('/present/del', [PresentController::class, 'remove']);

Route::get('/person', [PersonController::class, 'index']);

Route::get('/image_input', [ImageController::class, 'getImageInput']);
Route::post('/image_confirm', [ImageController::class, 'postImageConfirm']);
Route::post('/image_input', [ImageController::class, 'postImageComplete']);
Route::get('/image_show', [ImageController::class, 'show']);

Route::get('/image_del', [ImageController::class, 'del']);
Route::post('/image_del', [ImageController::class, 'remove']);
//Route::post('/image_complete', [ImageController::class, 'viewImage']);


Route::get('/person/auth', [PersonController::class, 'getAuth']);
Route::post('/person/auth', [PersonController::class, 'postAuth']);




//Route::get('jissyu3','App\Http\Controllers\Jissyu3_1Controller@index');
Route::get('/jissyu3', [Jissyu3_1Controller::class, 'index']);

Route::get('rewardpage','App\Http\Controllers\Jissyu3_1Controller@index2');

//Route::get('sendpage','App\Http\Controllers\Jissyu3_1Controller@index3');

Route::get('sendtestpage','App\Http\Controllers\Jissyu3_1Controller@index4');

Route::get('mypage','App\Http\Controllers\Jissyu3_1Controller@index5');


Route::get('index','App\Http\Controllers\MainpageController@index');

Route::get('index2','App\Http\Controllers\MainpageController@index2');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('contacts', [ContactsController::class, 'index'])->name('contact.index');
Route::post('contacts/confirm', [ContactsController::class, 'confirm'])->name('contact.confirm');
Route::post('contacts/complete', [ContactsController::class, 'complete'])->name('contact.complete');



Route::get('indexa','App\Http\Controllers\HelloaController@indexa');
