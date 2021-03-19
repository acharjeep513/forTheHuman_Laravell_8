<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\navController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\calculatorController;
use App\Http\Controllers\slidersController;
use App\Http\Controllers\ActivityController;
use App\Models\slide;
use App\Models\Activity;
use App\Models\User;
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
	 $slides = slide::orderBy('id','desc')->get();
	 $activity = Activity::orderBy('id','desc')->get();
	//return response()->json($slides);
    return view('welcome',compact('slides','activity'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
	$slides = slide::orderBy('id','desc')->get();
	 $activity = Activity::orderBy('id','desc')->get();
    $user=User::where('id', Auth::id())->first();
    	
    	return view('UserProfile.mainProfile',compact('user'));
})->name('dashboard');


Route::get('/adminLog',[loginController::class,'showLoginForm'])->name('admin.login');
Route::post('/admin/login',[loginController::class,'login']);
//Route::middleware(['middleware'=>'admin'])->get('/Log',[AdminController::class,'add']);

// Route::middleware(['admin'])->get('/Log', function () {
//    return view('admin.home');
// });


Route::get('/Log',[AdminController::class,'add']);

Route::get('/blockUserAccess',[AdminController::class,'blockUserAccess'])->name('UserData');

Route::get('/blockUserAccess/{id}',[AdminController::class,'blockUserAccessId'])->name('block');

Route::get('/blockUserAccess/{id}',[AdminController::class,'blockUserAccessId'])->name('block');






Route::get('/unblockUserAccess/{id}',[AdminController::class,'unblockUserAccess']);
Route::post('/unblocKUserAccessSaveId/{id}',[AdminController::class,'unblockUserAccessId']);





Route::post('/blocKUserAccessSave/{id}',[AdminController::class,'blocKUserAccessSave']);

Route::get('/totalmoney',[AdminController::class,'totalmoney']);

Route::post('/thisYear',[calculatorController::class,'thisYear']);
Route::post('/thisMonth',[calculatorController::class,'thisMonth']);
Route::post('/thisDay',[calculatorController::class,'thisDay']);
Route::post('/Search',[calculatorController::class,'search']);
Route::post('/Search1',[calculatorController::class,'search1']);

Route::post('/Search2',[calculatorController::class,'search2']);












Route::get('/verify', [RegisterController::class,'verifyUser']  )->name('verify.user');

Route::get('/allNotice', [NoticeController::class,'mainNotice']);

Route::get('/detailNotice/{id}', [NoticeController::class,'detailNotice']);





Route::get('/profile', [ProfileController::class,'mainProfile'])->name('profile');

Route::get('/sendMoney', [ProfileController::class,'sendMoney']);

Route::post('/saveSendMoney', [ProfileController::class,'saveSendMoney']);

Route::get('/massage', [ProfileController::class,'massage']);

Route::post('/sendMassage', [ProfileController::class,'saveMassage']);

Route::get('/paymentStatus', [ProfileController::class,'paymentStatus']);

Route::get('/changeProfile', [ProfileController::class,'changeProfile']);


Route::post('/sendVerification', [ProfileController::class,'sendVerification']);

Route::get('/updateProfile', [profileController::class,'updateProfile']  )->name('verify.user');

Route::post('/saveUpdateProfile/{id}', [profileController::class,'saveUpdateProfile']  );

Route::get('/blockMsg', [ProfileController::class,'blockMsg']);








Route::get('/ActivityAccess', [ProfileController::class,'ActivityAccess']);








//slider 
Route::get('/adminManageSlider', [slidersController::class,'indexs'])->name('adminManageSlider');
Route::post('/adminManageSlider',[slidersController::class,'indexs']);
Route::get('/adminAddSlider', [slidersController::class,'adminAddSlider']);
Route::post('/adminAddSlider',[slidersController::class,'adminAddSlider'] );
Route::get('/adminShowSlider', [slidersController::class,'adminShowSlider'])->name('showSlider');
Route::get('/adminEditedSlider/{id}',[slidersController::class,'slidesView']);
Route::post('/slidesEdit/{id}',[slidersController::class,'slidesEdit']);
Route::get('/adminDeleteSlider/{id}',[slidersController::class,'sliderDelete']);
Route::post('/slidesAddToDatabase',[slidersController::class,'slidesAddToDatabase']);




Route::get('/ActivityAccess',[ActivityController::class,'ActivityAccess'])->name('activity');

Route::get('/adminAddActivity',[ActivityController::class,'adminAddActivity']);
Route::post('/activityAddToDatabase',[ActivityController::class,'activityAddToDatabase']);
Route::get('/adminShowActivity', [ActivityController::class,'adminShowActivity'])->name('showActivity');

Route::get('/adminDeleteActivity', [ActivityController::class,'adminDeleteActivity'])->name('adminDeleteActivity');
Route::get('/adminDeleteActivitySave/{id}', [ActivityController::class,'adminDeleteActivitySave']);







Route::get('/addNotice',[AdminController::class,'addNotice']);
Route::post('/addNoticeSave',[AdminController::class,'addNoticeSave']);
Route::get('/adminShowNoice',[AdminController::class,'adminShowNoice'])->name('notice');

Route::get('/adminDeleteNotice/{id}',[AdminController::class,'adminDeleteNotice']);


Route::get('/indexNotice',[AdminController::class,'indexNotice']);