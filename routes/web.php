<?php

use App\Http\Controllers\AllropertypageController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApointmentController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PaymentController;

use App\Http\Controllers\AgentPropertyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProperyController;
use App\Http\Controllers\SingleropertypageController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\AgentSubscriptionController;

use App\Http\Controllers\AgentProfileController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\SingleCommandApplication;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('pages.index');
// });

//---------------------------------Breeze-------------------------------------------------------

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
//---------------------------------end Breeze---------------------------------------------------


//--------------login and registration--------------------
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

// Route::get('/register', [RegisterController::class, 'create'])
//     ->middleware('guest')
//     ->name('register'); // Change this to point to your index page

// Route::post('/register', [RegisterController::class, 'store']);


//----------------home page----------------------------------
Route::get('/',[HomepageController::class,'index'] )->name('home');


//-------------------all Properties--------------------------------
Route::get('/familyhome/{id}',[AllropertypageController::class,'familyHome'] )->name('familyHouse');
Route::get('/populler_places/{area_name}',[AllropertypageController::class,'populler_places'] )->name('populler_places');



//-------------------single Properties--------------------------------
Route::get('/singlehome/{id}',[SingleropertypageController::class,'singleHome'] )->name('singleHouse');

//--------------------apointment-----------------------------

// Route::post('/apointment', [ApointmentController::class , 'store'])->name('apointment.store');

Route::POST('apointment', [ApointmentController::class, 'store'])->name('apointmentStore');


//---------------------about and contact-------------------

Route::get('/about', function () {
        return view('pages.about');
    })->name('about');

Route::get('/contact', function () {
        return view('pages.contact-us')->name('contact');
});




//------------------dashboard-------------------------------------
// Route::get('/dashboard', function () {
//     return view('dash.dashboard_admin');
// });

Route::get('/admin.index2',[AdminController::class,'index2'] )->name('admin.index2');
Route::get('/admin.createNewAdmin',[AdminController::class,'createNewAdmin'] )->name('admin.createNewAdmin');
Route::post('/admin.storeNewAdmin',[AdminController::class,'storeNewAdmin'] )->name('admin.storeNewAdmin');


Route::resource('/dashboard_admin', AdminController::class);
Route::resource('/category', CategoryController::class);

Route::resource('/customer', CustomerController::class);
Route::resource('/agent', AgentController::class);


Route::resource('/admin', AdminController::class);
Route::get('/subscription',[SubscriptionController::class,'index'])->name('subscription');;


Route::resource('/property',ProperyController::class);
Route::resource('/subscription',SubscriptionController::class);

Route::resource('admin', AdminController::class);

//-----------------------------------------Agent Profile------------------------------


Route::resource('/Agent_profile', AgentProfileController::class);
Route::get('/agent_profile/{id}', [AgentProfileController::class, 'index'])
    ->name('agent_profile.index');

    
Route::resource('/property_agent',AgentPropertyController::class);
Route::get('/Property_agent/{user_id}', [AgentPropertyController::class, 'index'])->name('propertyWithIndex');


Route::get('/property_agent/delete/{id}/{user_id}', [AgentPropertyController::class, 'destroy'])->name('property_agent.delete');

Route::resource('/subscription_agent',AgentSubscriptionController::class);
Route::post('/checkOut_agent', [PaymentController::class, 'checkOut'])->name('checkOut');
Route::post('/purchaseSubscribe', [PaymentController::class, 'purchaseSubscribe'])->name('purchaseSubscribe');



// payment_agent
Route::resource('/payment_agent',PaymentController::class);

//search
// Route::post('/SrearchProperty', [HomepageController::class, 'searchProperties'])->name('SrearchProperty');
Route::match(['get', 'post'], '/SrearchProperty', [HomepageController::class, 'searchProperties'])->name('SrearchProperty');

// Route::get('/SrearchProperty', [HomepageController::class, 'searchProperties'])->name('SrearchProperty');


