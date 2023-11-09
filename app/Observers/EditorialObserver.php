<?php

namespace App\Observers;

use App\Mail\EditorialMail;
use App\Models\Editorial;
use Illuminate\Support\Facades\Mail;

class EditorialObserver
{
    /**
     * Handle the Editorial "created" event.
     */
    public function created(Editorial $editorial): void
    {
        Mail::to('asanscliment@gmail.com')->send(new EditorialMail($editorial));
    }

    /**
     * Handle the Editorial "updated" event.
     */
    public function updated(Editorial $editorial): void
    {
        //
    }

    /**
     * Handle the Editorial "deleted" event.
     */
    public function deleted(Editorial $editorial): void
    {
        //
    }

    /**
     * Handle the Editorial "restored" event.
     */
    public function restored(Editorial $editorial): void
    {
        //
    }

    /**
     * Handle the Editorial "force deleted" event.
     */
    public function forceDeleted(Editorial $editorial): void
    {
        //
    }
}
