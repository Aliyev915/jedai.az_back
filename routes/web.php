<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\LetterController;
use App\Http\Controllers\Back\PackageCategoryController;
use App\Http\Controllers\Back\PackageContentController;
use App\Http\Controllers\Back\PackageFeatureController;
use App\Http\Controllers\Back\PartnerController;
use App\Http\Controllers\Back\SettingController;
use App\Http\Controllers\Back\PortCategoryController;
use App\Http\Controllers\Back\PortContentController;
use App\Http\Controllers\Back\TeamController;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Back-End Routes
|--------------------------------------------------------------------------
*/

Route::get('/reload-captcha', [FrontController::class, 'reloadCaptcha']);

Route::group([ 'middleware' => ['auth:sanctum', 'verified'] ], function () {

    //Dashboard
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    //Settings
    Route::get('/admin/settings/general',  [SettingController::class, 'indexGeneral'])->name('admin.setting.general');
    Route::get('/admin/settings/contact',  [SettingController::class, 'indexContact'])->name('admin.setting.contact');
    Route::get('/admin/settings/social',   [SettingController::class, 'indexSocial'])->name('admin.setting.social');
    Route::get('/admin/settings/about',    [SettingController::class, 'indexAbout'])->name('admin.setting.about');
    Route::get('/admin/settings/home-page-seo', [SettingController::class, 'homepageSeo'])->name('admin.seo.homepage');
    Route::get('/admin/settings/site-seo',   [SettingController::class, 'siteeSeo'])->name('admin.seo.site');
    Route::post('/admin/settings/update',  [SettingController::class, 'update'])->name('admin.setting.update');
    
    //Packages Category
    Route::resource('/admin/packages/p-category', PackageCategoryController::class)->except(['create','show']);
    Route::get('/admin/packages/p-category/status', [PackageCategoryController::class, 'status'])->name('admin.p-category.status');
    
    //Portfolio Category
    Route::resource('/admin/porfolio/category', PortCategoryController::class)->except(['create','show']);
    Route::get('/admin/porfolio/category/status', [PortCategoryController::class, 'status'])->name('admin.portcategory.status');
    
    //Packages Content
    Route::resource('/admin/packages/p-content', PackageContentController::class)->except(['show','create']);
    Route::get('/admin/packages/p-content/status', [PackageContentController::class, 'status'])->name('admin.p-content.status');
    
    //Packages Feature
    Route::resource('/admin/packages/p-feature', PackageFeatureController::class)->except(['create']);
    
    //Portfolio Content
    Route::resource('/admin/porfolio/content',    PortContentController::class)->except(['show']);
    Route::get('/admin/porfolio/content/status', [PortContentController::class, 'status'])->name('admin.portcontent.status');
    Route::get('/admin/portfolio/trashed',       [PortContentController::class, 'trashedIndex'])->name('admin.portcontent.trashed');
    Route::get('/admin/portfolio/recover/{id}',  [PortContentController::class, 'recover'])->name('admin.portcontent.recover');
    Route::get('/admin/portfolio/hard-delete/{id}', [PortContentController::class, 'hardDelete'])->name('admin.portcontent.harddelete');
    
    //Team 
    Route::resource('/admin/team', TeamController::class)->except(['create', 'show']);
    Route::get('/admin/team/status', [TeamController::class, 'status'])->name('admin.team.status');
    
    //Partners Category
    Route::resource('/admin/partners', PartnerController::class)->except(['create','show']);
    Route::get('/admin/partners/status', [PartnerController::class, 'status'])->name('admin.partners.status');
    
    //Letter Category
    Route::resource('/admin/letters', LetterController::class)->except(['create','show']);
    Route::get('/admin/letters/status', [LetterController::class, 'status'])->name('admin.letters.status');
    
    Route::get('/adminlocale/{locale}',function($locale) {
        Session::put('locale',$locale);
        return redirect()->back();
    }); 
    //Profil
    Route::get('/admin/profil', function(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('admin.profil.index')->with('user',$user);
    })->name('admin.profil');
    
    });
    

/*
|--------------------------------------------------------------------------
| Front-End Routes
|--------------------------------------------------------------------------
*/
Route::get('/locale/{locale}',function($locale) {
    Session::put('locale',$locale);
    return redirect()->back();
}); 

Route::get('/', function () {
     return redirect('/az', 301);
});
Route::get('/saytlarin-hazirlanmasi', function () {
    return redirect('/az/saytlarin-hazirlanmasi', 301);
});

Route::get('/elaqe', [FrontController::class, 'contact']);
Route::get('/{lang}', [FrontController::class, 'homepage'])->name('homepage');

Route::get('/az/portfolio',[FrontController::class,'portfolio'])->name('portfolio');

//az
Route::get('/az/saytlarin-hazirlanmasi', [FrontController::class, 'sitePreparation'])->name('site.preparation'); 
Route::get('/az/elaqe', [FrontController::class, 'contact'])->name('contact');

//en
Route::get('/en/web-development-azerbaijan', [FrontController::class, 'sitePreparation'])->name('site.preparation.en'); 
Route::get('/en/contact', [FrontController::class, 'contact'])->name('contact.en');

//ru
Route::get('/ru/sozdaniye-saytov-baku', [FrontController::class, 'sitePreparation'])->name('site.preparation.ru'); 
Route::get('/ru/kontakti', [FrontController::class, 'contact'])->name('contact.ru');



Route::post('/elaqe', [FrontController::class, 'sendMessage'])->name('send.message');


