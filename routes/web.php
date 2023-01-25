<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\CommentController;
use App\Models\Role;

use App\Http\Controllers\RegistrController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     // return 'Главная страница';


//     return view('components.layout',['welcome'=>'Добро пожаловать']);
// });



// Route::get('/post/{catId}/{postId}', function ($catId,$postId) { // необъязательно чтобы названия переменных совпадали с карманами главное их порядок
//     return "ктегория id = $catId, пост id = $postId";  // /post/2/4    ктегория id = 2, пост id = 4
// })-> whereNumber('catId')-> where('postId', '[0-9]+');




// Route::prefix('post') -> group (function (){                // группировка маршрутов

//     Route::get('/{id?}/', function ($id = 1) {  // если id не передан то id = 1
//         return "пост - $id";
//     })->whereNumber('id') -> name('id');    // ограничения параметров(->whereNumber('id'))   //имя маршрута( -> name('nameRoute'))

//     Route::get('/all/', [PostController::class,'all']);
// });



// Route::match(['get','post'],'/test/', [UserController::class, 'test']) -> name('dashboard');
// Route::match(['get','post'],'/test2/', [PostController::class, 'test2']);
// Route::match(['get','post'],'/test3/', [PostController::class, 'test3']);




// Route::get( '/comment/{comment}', [CommentController::class, 'update']) -> name('comment');



// Route::match(['get','post'], '/login/user', [LoginController::class, 'showLoginUser']) -> name('loginUser');

// Route::match(['get','post'], '/login/admin', [LoginController::class, 'showLoginAdmin']) -> name('loginAdmin');




// Route::match(['get','post'], '/login/user/auth', [LoginController::class, 'authenticateUser']) -> name('authenticateUser');

// Route::match(['get','post'], '/login/admin/auth', [LoginController::class, 'authenticateAdmin']) -> name('authenticateAdmin');






// Route::middleware('auth:admin') -> group(function(){
//     // Route::get( '/post/form/', [PostController::class, 'create']) -> name('postForm')-> withoutMiddleware('auth');
//     // Route::match( ['get','post'],'/post/', [PostController::class, 'store']) -> name('post') -> withoutMiddleware('auth');

//     Route::match(['get','post'],'/users/', [UserController::class, 'show']) -> name('users');
//     Route::match(['get','post'],'/users/add', [UserController::class, 'addUser']);
//     Route::match(['get','post'],'/users/del/{id}', [UserController::class, 'delUser']);
//     Route::match(['get','post'],'/users/rename/{id}', [UserController::class, 'renameUser'])-> name('renameUser');

// });


// Route::middleware('auth:web') -> group(function(){
//     Route::get( '/post/form/', [PostController::class, 'create']) -> name('postForm');
//     Route::match( ['get','post'],'/post/', [PostController::class, 'store']) -> name('post');

// });

// Route::match(['get','post'],'/users/', [UserController::class, 'show']) -> name('users') -> middleware('auth:admin');










Route::match(['get','post'],'/registr', [RegistrController::class, 'show'])-> name('registr');
Route::match(['get','post'],'/registr/validation', [RegistrController::class, 'validation'])-> name('validation');


Route::match(['get','post'],'/login/', [LoginController::class, 'show'])-> name('login');
Route::match(['get','post'],'/login/auth/', [LoginController::class, 'auth'])-> name('loginAuth');

Route::match(['get','post'],'/logout/', [LoginController::class, 'logout'])-> name('logout');














// Route::middleware('auth:admin') -> group(function(){

//     Route::get('/admin', [HistoryController::class, 'showLayout']) -> name('adminLayout');





//     // Route::match(['get','post'],'/admin', [AdminController::class, 'showLayout'])-> name('adminLayout');
// });


// Route::get('/histories', [PaginationController::class, 'showHistories']) -> name('showHistories');

// Route::get( '/add_history', [HistoryController::class, 'showAddHistory']) -> name('showAddHistory');
// Route::get( '/add_history/add_validation', [HistoryController::class, 'addValidation']) -> name('showAddHistory');

// Route::get( '/update/{id}', [HistoryController::class, 'showUpdate']) -> name('showUpdate');
// Route::post( '/update/make', [HistoryController::class, 'makeUpdate']) -> name('makeUpdate');

// Route::get( '/delete/{id}', [HistoryController::class, 'deleteStory']) -> name('deleteStory');

// Route::match(['get','post'],'/logout/', [LoginController::class, 'logout'])-> name('logout');
// Route::get('/', [HistoryController::class, 'showLayout']) -> name('showLayout');












Route::middleware('auth:admin') -> group(function(){

    Route::get('/admin', [HistoryController::class, 'showLayout']) -> name('adminLayout');

    // Route::get('/admin/users', [HistoryController::class, 'showLayout']) -> name('adminShowUsers');

    Route::get('/admin/accept-moderator/{id}', [AdminController::class, 'acceptModerator']) -> name('accept-moderator');

    Route::get('/admin/status/{id}/', [AdminController::class, 'removeStatus']) -> name('remove-status');

    Route::get('/admin/activated/{id}', [AdminController::class, 'needActive']) -> name('activated');
    Route::get('/admin/blocked/{id}', [AdminController::class, 'needBlock']) -> name('blocked');







});



Route::post('/histories/change_select', [PaginationController::class, 'showHistories'])-> name('changeSelect');

Route::get('/histories', [PaginationController::class, 'showHistories']) -> name('showHistories');

Route::match(['get','post'],'/history/{id}', [HistoryController::class, 'showHistory']);


Route::get( '/add_history', [HistoryController::class, 'showAddHistory']) -> name('showAddHistory');
Route::get( '/add_history/add_validation', [HistoryController::class, 'addValidation']) -> name('showAddHistory');

Route::get( '/update/{id}', [HistoryController::class, 'showUpdate']) -> name('showUpdate');
Route::post( '/update/make', [HistoryController::class, 'makeUpdate']) -> name('makeUpdate');

Route::get( '/delete/{id}', [HistoryController::class, 'deleteStory']) -> name('deleteStory');


Route::get('/', [HistoryController::class, 'showLayout']) -> name('showLayout');








Route::middleware('auth:web') -> group(function(){

    Route::get('/account', [UserController::class, 'showAccount']) -> name('showAccount');

    Route::get('/account/change_status', [UserController::class, 'changeStatus']);
    Route::get('/account/cancel_change_status', [UserController::class, 'cancelChangeStatus']);
    Route::get('/histories_for_moderator', [HistoryController::class, 'historiesModeratorShow']) -> name('historiesModeratorShow');
    Route::get('/histories_for_moderator/publication/{id}', [HistoryController::class, 'historyPublication']);
    Route::get('/histories_for_moderator/check/{id}', [HistoryController::class, 'historyCheck']);

});


// Route::match(['get','post'],'/account/{$id}', [UserController::class, 'showAccount']);

// 123


// Auth::routes()   это просто вспомогательный класс, который помогает вам генерировать все маршруты, необходимые для аутентификации пользователя
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
