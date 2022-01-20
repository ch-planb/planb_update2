<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\ProjectCategoryController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\WhatWeDoController;
use App\Http\Controllers\Backend\ContactController;

use Laravel\Jetstream\Rules\Role;

Route::get('/', function () {
    return view('frontend.index');
});



Route::group(['prefix'=> 'admin', 'middleware'=>['admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
    //========================== menu and sub menu routes======================//

});



// Admin 
Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');


// User
// Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');



// Admin All Route 
Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

Route::get('/admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');


// Bappa

Route::prefix('our-team')->group(function(){
    Route::get('/create', [TeamController::class, 'create'])->name('our-team.create');
    Route::post('/store', [TeamController::class, 'store']);
    Route::get('/manage', [TeamController::class, 'manage'])->name('our-team.manage');
    Route::get('/show/list', [TeamController::class, 'showMembers']);
});

// For Project Category Route
Route::get('/project/category/create', [ProjectCategoryController::class, 'Create'])->name('project.category.create');
Route::post('/project/category/store', [ProjectCategoryController::class, 'store']);
Route::get('/show/projects/categories', [ProjectCategoryController::class, 'getProjectCategoriesData']);
Route::get('/project/category/manage', [ProjectCategoryController::class, 'manage'])->name('project.category.manage');
Route::post('/project/category/delete/{id}', [ProjectCategoryController::class, 'delete']);

// For Projects Route
Route::get('/project/create', [ProjectController::class, 'Create'])->name('project.create');
Route::post('/project/store', [ProjectController::class, 'ProjectStore']);
Route::get('/project/manage', [ProjectController::class, 'manage'])->name('project.manage');
Route::get('/show/projects', [ProjectController::class, 'getProjectsData']);
Route::post('/project/delete/{id}', [ProjectController::class, 'delete']);

// For Contact Route
Route::post('/contact/store', [ContactController::class, 'ContactStore']);
Route::get('/show/contacts/data', [ContactController::class, 'getData']);
Route::get('/contacts/list', [ContactController::class, 'ContactsList'])->name('contacts.list');
Route::post('/contact/delete/{id}', [ContactController::class, 'ContactDelete']);

//End Bappa


Route::get('/menu/add', [MenuController::class, 'addMenu'])->name('admin.menu.add');
Route::post('/menu/submit', [MenuController::class, 'submitMenu'])->name('admin.menu.submit');
Route::post('/menu/update/{id}', [MenuController::class, 'updateMenuPage'])->name('admin.menu.update');
Route::get('/menu/edit/{id}', [MenuController::class, 'editMenuPage'])->name('admin.menu.edit');
Route::get('/menu/delete/{id}', [MenuController::class, 'deleteMenuPage'])->name('admin.menu.delete');
//=========================== sub menu starts=========================//
Route::get('/submenu/add', [MenuController::class, 'addSubMenu'])->name('admin.submenu.add');
Route::post('/submenu/submit', [MenuController::class, 'submitSubMenu'])->name('admin.submenu.submit');
Route::get('/submenu/edit/{id}', [MenuController::class, 'editSubMenuPage'])->name('admin.submenu.edit');

Route::post('/submenu/update/{id}', [MenuController::class, 'updateSubMenu'])->name('admin.submenu.update');
Route::get('/submenu/delete/{id}', [MenuController::class, 'deleteSubMenuPage'])->name('admin.submenu.delete');




Route::prefix('slider')->group(function(){
    Route::get('/view', [SliderController::class, 'SliderView'])->name('slider.view');
    Route::post('/store', [SliderController::class, 'SliderStore'])->name('slider.store');
    Route::get('/inactive/{id}', [SliderController::class, 'SliderInactive'])->name('slider.inactive');

    Route::get('/active/{id}', [SliderController::class, 'SliderActive'])->name('slider.active');

});
// ============What We do all routes start by arko==================

Route::group(['prefix'=> 'admin', 'middleware'=>['admin']], function(){
    Route::get('/whatWeDo/index', [WhatWeDoController::class, 'index'])->name('whatWeDo.index');
    Route::get('/whatWeDo/add', [WhatWeDoController::class, 'create'])->name('whatWeDo.create');
    Route::post('/whatWeDo/store', [WhatWeDoController::class, 'store'])->name('whatWeDo.store');
    Route::get('/whatWeDo/edit/{id}', [WhatWeDoController::class, 'edit'])->name('whatWeDo.edit');
    Route::post('/whatWeDo/update/{id}', [WhatWeDoController::class, 'update'])->name('whatWeDo.update');
    Route::get('/whatWeDo/delete/{id}', [WhatWeDoController::class, 'delete'])->name('whatWeDo.delete');
});


// ============What We do all routes end by arko==================


// ============service all routes start by arko==================

Route::group(['prefix'=> 'admin', 'middleware'=>['admin']], function(){
    Route::get('/service/index', [ServiceController::class, 'index'])->name('service.index');
    Route::get('/service/add', [ServiceController::class, 'add'])->name('service.add');
    Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::post('/service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::get('/service/delete/{id}', [ServiceController::class, 'delete'])->name('service.delete');
});


// ============service all routes end by arko==================




// ============slider all routes end by ornob==================

Route::prefix('testimonials')->group(function(){
    Route::get('/view', [TestimonialController::class, 'testimonialView'])->name('testimonials.view');
    Route::post('/store', [TestimonialController::class, 'testimonialStore'])->name('testimonial.store');


});

// ============slider all routes end by ornob==================