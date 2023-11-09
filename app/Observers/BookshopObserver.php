<?php

namespace App\Observers;

use App\Mail\BookshopMail;
use App\Models\Bookshop;
use Illuminate\Support\Facades\Mail;

class BookshopObserver
{
    /**
     * Handle the Bookshop "created" event.
     */
    public function created(Bookshop $bookshop): void
    {
        Mail::to('asanscliment@gmail.com')->send(new BookshopMail($bookshop));
    }

    /**
     * Handle the Bookshop "updated" event.
     */
    public function updated(Bookshop $bookshop): void
    {
        //
    }

    /**
     * Handle the Bookshop "deleted" event.
     */
    public function deleted(Bookshop $bookshop): void
    {
        //
    }

    /**
     * Handle the Bookshop "restored" event.
     */
    public function restored(Bookshop $bookshop): void
    {
        //
    }

    /**
     * Handle the Bookshop "force deleted" event.
     */
    public function forceDeleted(Bookshop $bookshop): void
    {
        //
    }
}
