<?php

namespace App\Observers;

use App\Models\Autor;
use App\Mail\AutorMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AutorObserver
{
    /**
     * Handle the Autor "created" event.
     */
    public function created(Autor $autor): void
    {
        if ($autor->user->type != 'admin') {
            Mail::to('asanscliment@gmail.com')->send(new AutorMail($autor));
        }
    }

    /**
     * Handle the Autor "updated" event.
     */
    public function updated(Autor $autor): void
    {
        //
    }

    /**
     * Handle the Autor "deleted" event.
     */
    public function deleted(Autor $autor): void
    {
        //
    }

    /**
     * Handle the Autor "restored" event.
     */
    public function restored(Autor $autor): void
    {
        //
    }

    /**
     * Handle the Autor "force deleted" event.
     */
    public function forceDeleted(Autor $autor): void
    {
        //
    }
}
