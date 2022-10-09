<?php

use App\Http\Controllers\HomeTextController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

use App\Models\HomeText;
use App\Models\About;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Skill;

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


/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */
Route::get('/', function () {
    $hometext = HomeText::first();
    $about = About::first();
    $educations = Education::all();
    $experiences = Experience::all();
    $skills = Skill::all();
    return view('frontend.frontend_layouts',compact('hometext','about','educations','experiences','skills'));
})->name('dashboard');

Route::prefix('dashboard')->middleware(['auth'])->group(function(){
    Route::get('/', function () {
        return view('backend.dashboard');
    })->name('dashboard');
    Route::prefix('hometexts')->group(function(){
        Route::get('/edit',[HomeTextController::class, 'edit'])->name('hometexts.edit');
        Route::post('/update/',[HomeTextController::class, 'update'])->name('hometexts.update');
    });
    Route::prefix('about')->group(function(){
        Route::get('/edit',[AboutController::class, 'edit'])->name('about.edit');
        Route::post('/update/',[AboutController::class, 'update'])->name('about.update');
    });
    Route::resource('educations',EducationController::class);
    Route::resource('experiences',ExperienceController::class);
    Route::resource('skills',SkillController::class);
});
/* Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.admin.login')->name('login');
        Route::post('/check',[AdminController::class,'check'])->name('check');
    });
    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
    });
}); */
require __DIR__.'/auth.php';
