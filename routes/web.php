<?php

use App\Http\Controllers\SiteOne\SiteOneController;
use Illuminate\Support\Facades\Route;

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

Route::get('/Form', function () {
    return view('task1');
});



// /lect4  site1 /home/about us/contact us
// Route::prefix('site1')->group(function(){
//     Route::get('/home',[SiteOneController::class,'home' ]);

//     Route::get('/about',[SiteOneController::class,'about'] );

//     Route::get('/contact', [SiteOneController::class,'contact'] );
//     Route::get('/msg/{id?}', [SiteOneController::class,'msg'] );
// });


Route::prefix('site1')->controller(SiteOneController::class)->group(function(){
    Route::get('/home','home');
    Route::get('/about','about'  );
    Route::get('/contact', 'contact'  );
    Route::get('/msg/{id?}', 'msg'  );
});
