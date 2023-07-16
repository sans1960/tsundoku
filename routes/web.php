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
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CommentController;




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







Route::post('/ratingbook',[Frontcontroller::class,'ratingbook'])->name('rating.book');
Route::post('/ratingautor',[Frontcontroller::class,'ratingautor'])->name('rating.autor');
Route::post('/ratingeditorial',[Frontcontroller::class,'ratingeditorial'])->name('rating.editorial');
Route::post('/ratingbookshop',[Frontcontroller::class,'ratingbookshop'])->name('rating.bookshop');
Route::post('/ratingpost',[Frontcontroller::class,'ratingpost'])->name('rating.post');
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::get('/admin/users', [AdminController::class, 'allusers'])->name('admin.users.index');
Route::get('/admin/comments', [AdminController::class, 'allcomments'])->name('admin.comments.index');
Route::delete('/admin/comments{comment}', [AdminController::class, 'deletecomment'])->name('admin.comments.destroy');
Route::resource('/admin/generes', GenereController::class)->middleware('auth')->names('admin.generes');
Route::resource('/admin/autors', AutorController::class)->middleware('auth')->names('admin.autors');
Route::resource('/admin/posts', PostController::class)->middleware('auth')->names('admin.posts');
Route::resource('/admin/editorials', EditorialController::class)->middleware('auth')->names('admin.editorials');
Route::resource('/admin/bookshops', BookshopController::class)->middleware('auth')->names('admin.bookshops');
Route::resource('/admin/books', BookController::class)->middleware('auth')->names('admin.books');
Route::resource('/admin/medis', Medicontroller::class)->middleware('auth')->names('admin.medis');
