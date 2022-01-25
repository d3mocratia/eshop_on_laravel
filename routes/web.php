<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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



Route::get('/',[MainController::class,'index'])->name('home');
Route::get('/category',[CategoryController::class,'index'])->name('category.index');
Route::get('/test' , function (){
    /** @var \App\Models\Category $category */
    $category =  \App\Models\Category::query()->whereNull('parent_id')->get()->first();
   dump($category->getOriginal());
    echo "<br>";
    foreach ($category->childrens as $child){
        dump($child->getOriginal());
    }
});



