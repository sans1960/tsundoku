<?php

namespace App\Observers;

use App\Mail\BookMail;
use App\Mail\ConfirmBookMail;
use App\Models\Book;
use Illuminate\Support\Facades\Mail;

class BookObserver
{
    /**
     * Handle the Book "created" event.
     */
    public function created(Book $book): void
    {
        Mail::to('asanscliment@gmail.com')->send(new BookMail($book));
    }

    /**
     * Handle the Book "updated" event.
     */
    public function updated(Book $book): void
    {
        Mail::to($book->user->email)->send(new ConfirmBookMail($book));
    }

    /**
     * Handle the Book "deleted" event.
     */
    public function deleted(Book $book): void
    {
        //
    }

    /**
     * Handle the Book "restored" event.
     */
    public function restored(Book $book): void
    {
        //
    }

    /**
     * Handle the Book "force deleted" event.
     */
    public function forceDeleted(Book $book): void
    {
        //
    }
}
