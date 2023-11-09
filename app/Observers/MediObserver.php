<?php

namespace App\Observers;

use App\Mail\MediMail;
use App\Models\Medi;
use Illuminate\Support\Facades\Mail;

class MediObserver
{
    /**
     * Handle the Medi "created" event.
     */
    public function created(Medi $medi): void
    {
        Mail::to('asanscliment@gmail.com')->send(new MediMail($medi));
    }

    /**
     * Handle the Medi "updated" event.
     */
    public function updated(Medi $medi): void
    {
        //
    }

    /**
     * Handle the Medi "deleted" event.
     */
    public function deleted(Medi $medi): void
    {
        //
    }

    /**
     * Handle the Medi "restored" event.
     */
    public function restored(Medi $medi): void
    {
        //
    }

    /**
     * Handle the Medi "force deleted" event.
     */
    public function forceDeleted(Medi $medi): void
    {
        //
    }
}
