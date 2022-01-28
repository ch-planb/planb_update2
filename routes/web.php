<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\ProjectCategoryController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\CompanyInfoController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\WhatWeDoController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\AboutUsController;
use App\Http\Controllers\Frontend\IndexController;
use Laravel\Jetstream\Rules\Role;

// Route::get('/', function () {
//     return view('frontend.index');
// });

// ============ Route For Frontend  =========================
Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/projects', [IndexController::class, 'projects'])->name('projects');
Route::get('/project/details/{id}', [IndexController::class, 'project_single_page'])->name('project-details');
Route::get('/pricing-&-plan', [IndexController::class, 'pricing'])->name('pricing');
Route::get('/our-team', [IndexController::class, 'our_team'])->name('our_team');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');





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
// For Our Team Route
Route::prefix('our-team')->group(function(){
    Route::get('/create', [TeamController::class, 'create'])->name('our-team.create');
    Route::post('/store', [TeamController::class, 'store']);
    Route::get('/manage', [TeamController::class, 'manage'])->name('our-team.manage');
    Route::get('/show/list', [TeamController::class, 'showMembers']);
    Route::post('/delete/{id}', [TeamController::class, 'delete']);
});

// For Project Category Route
Route::get('/project/category/create', [ProjectCategoryController::class, 'Create'])->name('project.category.create');
Route::post('/project/category/store', [ProjectCategoryController::class, 'store']);
Route::get('/show/projects/categories', [ProjectCategoryController::class, 'getProjectCategoriesData']);
Route::get('/project/category/manage', [ProjectCategoryController::class, 'manage'])->name('project.category.manage');
Route::post('/project/category/delete/{id}', [ProjectCategoryController::class, 'delete']);
Route::post('/project/category/status/{id}', [ProjectCategoryController::class, 'changeStatus']);

// For Projects Route
Route::get('/project/create', [ProjectController::class, 'Create'])->name('project.create');
Route::post('/project/store', [ProjectController::class, 'ProjectStore']);
Route::get('/project/manage', [ProjectController::class, 'manage'])->name('project.manage');
Route::get('/show/projects', [ProjectController::class, 'getProjectsData']);
Route::post('/project/delete/{id}', [ProjectController::class, 'delete']);
Route::post('/project/change-status/{id}', [ProjectController::class, 'changeStatus']);

// For Contact Route
Route::post('/contact/store', [ContactController::class, 'ContactStore']);
Route::get('/show/contacts/data', [ContactController::class, 'getData']);
Route::get('/contacts/list', [ContactController::class, 'ContactsList'])->name('contacts.list');
Route::post('/contact/delete/{id}', [ContactController::class, 'ContactDelete']);

// For Company Info Route
Route::prefix('company-info')->group(function(){
    Route::get('/show', [CompanyInfoController::class, 'updateForm'])->name('company.info');
    Route::post('/update', [CompanyInfoController::class, 'update'])->name('company-info.update');
});
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


//------start aboutus--------------//
Route::prefix('aboutUs')->group(function(){
    Route::get('/index', [AboutUsController::class, 'index'])->name('aboutUs.index');
    Route::post('/store', [AboutUsController::class, 'store'])->name('aboutUs.store');
    Route::get('/list', [AboutUsController::class, 'view'])->name('aboutUs.list');
    Route::get('/delete/{id}', [AboutUsController::class, 'delete'])->name('aboutUs.delete');
});

//------aboutus ends --------------//

// ============slider all routes end by ornob==================

Route::prefix('testimonials')->group(function(){
    Route::get('/view', [TestimonialController::class, 'testimonialView'])->name('testimonials.view');
    Route::post('/store', [TestimonialController::class, 'testimonialStore'])->name('testimonial.store');


});

// ============slider all routes end by ornob==================