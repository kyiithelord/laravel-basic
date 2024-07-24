<?php
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/home', function () {
//     return view("blog.home");
// });

// Route::get('/about', function () {
//     return view("blog.about") ;
// });

// Route::get('/contact', function () {
//     return view("blog.contact") ;
// });

Route::get('/mac/{type}/{size}', function ($type,$size) {
    return "This is Macbook $type"." Macbook size is $size";
});

Route::get("/profile/{age?}",function($age=null){
    return "This is user Profile $age";
});

Route::get("/area/{w}/{h}",fn($w,$h)=>($w*$h));

Route::get("/home",[ItemController::class,'home']);
Route::get('/about',[ItemController::class,'about']);
Route::get('/contact',[ItemController::class,'contact']);
Route::get('/test',[TestController::class,'test']);


// Route::get('product',[ProductController::class],'index');

// Route::get('product/create',[ProductController::class],'create');

// Route::get('product',[ProductController::class],'store');

// Route::get('product/show{id}',[ProductController::class],'show');

// Route::get('product/edit{id}',[ProductController::class],'edit');

// Route::get('product/update',[ProductController::class],'update');

// Route::get('product/destroy',[ProductController::class],'destroy');


Route::resource('product',ProductController::class);

