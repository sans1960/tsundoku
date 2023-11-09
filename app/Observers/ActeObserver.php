<?php

namespace App\Observers;

use App\Mail\ActeMail;
use App\Models\Acte;
use Illuminate\Support\Facades\Mail;

class ActeObserver
{
    /**
     * Handle the Acte "created" event.
     */
    public function created(Acte $acte): void
    {
        Mail::to('asanscliment@gmail.com')->send(new ActeMail($acte));
    }

    /**
     * Handle the Acte "updated" event.
     */
    public function updated(Acte $acte): void
    {
        //
    }

    /**
     * Handle the Acte "deleted" event.
     */
    public function deleted(Acte $acte): void
    {
        //
    }

    /**
     * Handle the Acte "restored" event.
     */
    public function restored(Acte $acte): void
    {
        //
    }

    /**
     * Handle the Acte "force deleted" event.
     */
    public function forceDeleted(Acte $acte): void
    {
        //
    }
}
