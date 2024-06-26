<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\GenereController;
use App\Http\Controllers\Admin\AutorController;
use App\Http\Controllers\Admin\EditorialController;
use App\Http\Controllers\Admin\BookshopController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\Medicontroller;
use App\Http\Controllers\Admin\ActeController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CarruselController;

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CalendarController;

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ActivitatController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RatingBookController;
use App\Http\Controllers\ComentBookController;
use App\Http\Controllers\DenunciaComentBookController;
use App\Http\Controllers\RatingAutorController;
use App\Http\Controllers\ComentAutorController;
use App\Http\Controllers\ComentEditorialController;
use App\Http\Controllers\ComentBookshopController;
use App\Http\Controllers\ComentPostController;
use App\Http\Controllers\ComentMediController;
use App\Http\Controllers\ComentActeController;
use App\Http\Controllers\DenunciaComentAutorController;
use App\Http\Controllers\DenunciaComentEditorialController;
use App\Http\Controllers\DenunciaComentBookshopController;
use App\Http\Controllers\DenunciaComentPostController;
use App\Http\Controllers\DenunciaComentMediController;
use App\Http\Controllers\DenunciaComentActeController;
use App\Http\Controllers\RatingEdiorialController;
use App\Http\Controllers\RatingBookshopController;
use App\Http\Controllers\RatingPostController;
use App\Http\Controllers\RatingMediController;
use App\Http\Controllers\RatingActeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;




Route::get('/', [Frontcontroller::class, 'index'])->name('index');
Route::get('/books', [Frontcontroller::class, 'books'])->name('books');
Route::get('/books/{book}', [Frontcontroller::class, 'book'])->name('book');
Route::get('/quisom', [Frontcontroller::class, 'quiSom'])->name('quisom');
Route::get('/autors', [Frontcontroller::class, 'autors'])->name('autors');
Route::get('/editorials', [Frontcontroller::class, 'editorials'])->name('editorials');
Route::get('/editorials/{editorial}', [Frontcontroller::class, 'editorial'])->name('editorial');
Route::get('/autor/{autor}', [Frontcontroller::class, 'autor'])->name('autor');
Route::get('/generes', [Frontcontroller::class, 'generes'])->name('generes');
Route::get('/generes/{genere}', [Frontcontroller::class, 'genere'])->name('genere');
Route::get('/bookshops', [Frontcontroller::class, 'bookshops'])->name('bookshops');
Route::get('/bookshops/{bookshop}', [Frontcontroller::class, 'bookshop'])->name('bookshop');
Route::get('/posts', [Frontcontroller::class, 'allPosts'])->name('posts');
Route::get('/posts/{post}', [Frontcontroller::class, 'onepost'])->name('post');
Route::get('/medis', [Frontcontroller::class, 'allMedis'])->name('medis');
Route::get('/medis/{medi}', [Frontcontroller::class, 'onemedi'])->name('medi');
// Route::get('/calendari', [Calendarcontroller::class, 'index'])->name('calendari');
// Route::get('/calendari/{mes}', [Calendarcontroller::class, 'index_month'])->name('calendari.mes');
Route::get('/actes', [Frontcontroller::class, 'allActes'])->name('actes');
Route::get('/actes/{acte}', [Frontcontroller::class, 'oneacte'])->name('acte');
Route::post('search', [SearchController::class, 'search'])->name('search');














Auth::routes();
Auth::routes(['verify' => true]);
Route::middleware(['auth', 'forbid-banned-user'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home/lector', [App\Http\Controllers\HomeController::class, 'lector'])->name('home.lector');
    Route::get('/home/autor', [App\Http\Controllers\HomeController::class, 'autor'])->name('home.autor');
    Route::get('/home/editorial', [App\Http\Controllers\HomeController::class, 'editorial'])->name('home.editorial');
    Route::get('/home/llibreria', [App\Http\Controllers\HomeController::class, 'llibreria'])->name('home.llibreria');
    Route::get('/home/activitat/{id}', [ActivitatController::class, 'activitat'])->name('home.activitat');
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
    Route::get('/admin/users', [AdminController::class, 'allusers'])->name('admin.users.index');
    Route::get('/admin/users/edit/{id}', [AdminController::class, 'edituser'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [AdminController::class, 'updateuser'])->name('admin.users.update');
    Route::get('/admin/users/{user}', [AdminController::class, 'oneuser'])->name('admin.users.show');
    Route::delete('/admin/users/{id}', [AdminController::class, 'deleteuser'])->name('admin.users.delete');
    Route::get('/admin/users/{user}/ban', [AdminController::class, 'ban'])->name('admin.users.ban');
    Route::get('/admin/users/{user}/unban', [AdminController::class, 'unban'])->name('admin.users.unban');
    Route::patch('/admin/users/{user}/updateban', [AdminController::class, 'updateban'])->name('admin.users.updateban');
    Route::get('/admin/bulleti', [AdminController::class, 'bulleti'])->name('admin.users.bulleti');
    Route::resource('/admin/generes', GenereController::class)->names('admin.generes');
    Route::resource('/admin/autors', AutorController::class)->names('admin.autors');
    Route::get('/admin/findautors', [AutorController::class, 'findautor'])->name('admin.findautors');
    Route::post('/admin/findautors', [AutorController::class, 'searchautor'])->name('admin.searchautors');
    Route::resource('/admin/posts', PostController::class)->names('admin.posts');
    Route::resource('/admin/banners', BannerController::class)->names('admin.banners');
    Route::resource('/admin/carrusels', CarruselController::class)->names('admin.carrusels');
    Route::resource('/admin/editorials', EditorialController::class)->names('admin.editorials');
    Route::resource('/admin/bookshops', BookshopController::class)->names('admin.bookshops');
    Route::resource('/admin/ratingbook', RatingBookController::class)->names('rating.book');
    Route::resource('/admin/comentbook', ComentBookController::class)->names('coment.book');
    Route::resource('/admin/denunciacomentbook', DenunciaComentBookController::class)->names('denunciacoment.book');
    Route::resource('/admin/ratingautor', RatingAutorController::class)->names('rating.autor');
    Route::resource('/admin/comentautor', ComentAutorController::class)->names('coment.autor');
    Route::resource('/admin/denunciacomentautor', DenunciaComentAutorController::class)->names('denunciacoment.autor');
    Route::resource('/admin/ratingeditorial', RatingEdiorialController::class)->names('rating.editorial');
    Route::resource('/admin/comenteditorial', ComentEditorialController::class)->names('coment.editorial');
    Route::resource('/admin/denunciacomenteditorial', DenunciaComentEditorialController::class)->names('denunciacoment.editorial');
    Route::resource('/admin/ratingbookshop', RatingBookshopController::class)->names('rating.bookshop');
    Route::resource('/admin/comentbookshop', ComentBookshopController::class)->names('coment.bookshop');
    Route::resource('/admin/denunciacomentbookshop', DenunciaComentBookshopController::class)->names('denunciacoment.bookshop');
    Route::resource('/admin/ratingpost', RatingPostController::class)->names('rating.post');
    Route::resource('/admin/comentpost', ComentPostController::class)->names('coment.post');
    Route::resource('/admin/denunciacomentpost', DenunciaComentPostController::class)->names('denunciacoment.post');
    Route::resource('/admin/ratingmedi', RatingMediController::class)->names('rating.medi');
    Route::resource('/admin/comentmedi', ComentMediController::class)->names('coment.medi');
    Route::resource('/admin/denunciacomentmedi', DenunciaComentMediController::class)->names('denunciacoment.medi');
    Route::resource('/admin/ratingacte', RatingActeController::class)->names('rating.acte');
    Route::resource('/admin/comentacte', ComentActeController::class)->names('coment.acte');
    Route::resource('/admin/denunciacomentacte', DenunciaComentActeController::class)->names('denunciacoment.acte');

    Route::resource('/admin/books', BookController::class)->names('admin.books');
    Route::get('/admin/findbooks', [BookController::class, 'findbook'])->name('admin.findbooks');
    Route::post('/admin/findbooks', [BookController::class, 'searchbook'])->name('admin.searckbooks');
    Route::resource('/admin/medis', Medicontroller::class)->names('admin.medis');
    Route::resource('/admin/actes', ActeController::class)->names('admin.actes');
});
Route::group(['middleware' => 'auth', 'prefix' => 'messages', 'as' => 'messages'], function () {
    Route::get('/', [MessagesController::class, 'index']);
    Route::get('create', [MessagesController::class, 'create'])->name('.create');
    Route::post('/', [MessagesController::class, 'store'])->name('.store');
    Route::get('{thread}', [MessagesController::class, 'show'])->name('.show');
    Route::put('{thread}', [MessagesController::class, 'update'])->name('.update');
    Route::delete('{thread}', [MessagesController::class, 'destroy'])->name('.destroy');
});


Route::get('send-mail', [MailController::class, 'index']);








// Route::get('/migrate', function () {
//     \Artisan::call('migrate');
//     dd('migrated!');
// });
