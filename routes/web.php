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
use App\Http\Controllers\Admin\DenunciaController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ActivitatController;
use App\Http\Controllers\MailController;




Route::get('/',[Frontcontroller::class,'index'])->name('index');
Route::get('/books',[Frontcontroller::class,'books'])->name('books');
Route::get('/books/{book}',[Frontcontroller::class,'book'])->name('book');
Route::get('/autors',[Frontcontroller::class,'autors'])->name('autors');
Route::get('/editorials',[Frontcontroller::class,'editorials'])->name('editorials');
Route::get('/editorials/{editorial}',[Frontcontroller::class,'editorial'])->name('editorial');
Route::get('/autor/{autor}',[Frontcontroller::class,'autor'])->name('autor');
Route::get('/generes',[Frontcontroller::class,'generes'])->name('generes');
Route::get('/generes/{genere}',[Frontcontroller::class,'genere'])->name('genere');
Route::get('/bookshops',[Frontcontroller::class,'bookshops'])->name('bookshops');
Route::get('/bookshops/{bookshop}',[Frontcontroller::class,'bookshop'])->name('bookshop');
Route::get('/posts',[Frontcontroller::class,'allPosts'])->name('posts');
Route::get('/posts/{post}',[Frontcontroller::class,'onepost'])->name('post');
Route::get('/medis',[Frontcontroller::class,'allMedis'])->name('medis');
Route::get('/medis/{medi}',[Frontcontroller::class,'onemedi'])->name('medi');
Route::get('/calendari',[Calendarcontroller::class,'index'])->name('calendari');
Route::get('/calendari/{mes}',[Calendarcontroller::class,'index_month'])->name('calendari.mes');

Route::get('/actes/{acte}',[Frontcontroller::class,'oneacte'])->name('acte');







Route::post('/ratingbook',[Frontcontroller::class,'ratingbook'])->name('rating.book');
Route::post('/ratingautor',[Frontcontroller::class,'ratingautor'])->name('rating.autor');
Route::post('/ratingeditorial',[Frontcontroller::class,'ratingeditorial'])->name('rating.editorial');
Route::post('/ratingbookshop',[Frontcontroller::class,'ratingbookshop'])->name('rating.bookshop');
Route::post('/ratingpost',[Frontcontroller::class,'ratingpost'])->name('rating.post');
Route::post('/ratingmedi',[Frontcontroller::class,'ratingmedi'])->name('rating.medi');
Route::post('/ratingacte',[Frontcontroller::class,'ratingacte'])->name('rating.acte');
Route::post('/commentbook', [CommentController::class,'commentbook'])->name('comment.book');
Route::post('/replybook', [CommentController::class,'replybook'])->name('reply.book');
Route::post('/commentautor', [CommentController::class,'commentautor'])->name('comment.autor');
Route::post('/replyautor', [CommentController::class,'replyautor'])->name('reply.autor');
Route::post('/commenteditorial', [CommentController::class,'commenteditorial'])->name('comment.editorial');
Route::post('/replyeditorial', [CommentController::class,'replyeditorial'])->name('reply.editorial');
Route::post('/commentbookshop', [CommentController::class,'commentbookshop'])->name('comment.bookshop');
Route::post('/replybookshop', [CommentController::class,'replybookshop'])->name('reply.bookshop');
Route::post('/commentpost', [CommentController::class,'commentpost'])->name('comment.post');
Route::post('/replypost', [CommentController::class,'replypost'])->name('reply.post');
Route::post('/commentmedi', [CommentController::class,'commentmedi'])->name('comment.medi');
Route::post('/replymedi', [CommentController::class,'replymedi'])->name('reply.medi');
Route::post('/commentacte', [CommentController::class,'commentacte'])->name('comment.acte');
Route::post('/replyacte', [CommentController::class,'replyacte'])->name('reply.acte');


Auth::routes();
Route::middleware(['auth', 'forbid-banned-user'])->group(function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/activitat/{id}', [ActivitatController::class, 'activitat'])->name('home.activitat');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::get('/admin/users', [AdminController::class, 'allusers'])->name('admin.users.index');
Route::get('/admin/users/edit/{id}', [AdminController::class, 'edituser'])->name('admin.users.edit');
Route::put('/admin/users/{user}', [AdminController::class, 'updateuser'])->name('admin.users.update');
Route::get('/admin/users/{user}', [AdminController::class, 'oneuser'])->name('admin.users.show');
Route::get('/admin/users/{user}/ban', [AdminController::class, 'ban'])->name('admin.users.ban');
Route::get('/admin/users/{user}/unban', [AdminController::class, 'unban'])->name('admin.users.unban');
Route::patch('/admin/users/{user}/updateban', [AdminController::class, 'updateban'])->name('admin.users.updateban');
Route::get('/admin/comments', [AdminController::class, 'allcomments'])->name('admin.comments.index');
Route::delete('/admin/comments{comment}', [AdminController::class, 'deletecomment'])->name('admin.comments.destroy');
Route::resource('/admin/generes', GenereController::class)->names('admin.generes');
Route::resource('/admin/autors', AutorController::class)->names('admin.autors');
Route::resource('/admin/posts', PostController::class)->names('admin.posts');
Route::resource('/admin/editorials', EditorialController::class)->names('admin.editorials');
Route::resource('/admin/bookshops', BookshopController::class)->names('admin.bookshops');
Route::resource('/admin/books', BookController::class)->names('admin.books');
Route::resource('/admin/medis', Medicontroller::class)->names('admin.medis');
Route::resource('/admin/actes', ActeController::class)->names('admin.actes');
Route::resource('/admin/denuncia', DenunciaController::class)->names('admin.denuncia');
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