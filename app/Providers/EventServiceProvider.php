<?php

namespace App\Providers;

use App\Models\Acte;
use App\Models\Autor;
use App\Models\Book;
use App\Models\Bookshop;
use App\Models\Editorial;
use App\Models\Medi;
use App\Models\Post;
use App\Models\User;
use App\Observers\ActeObserver;
use App\Observers\AutorObserver;
use App\Observers\BookObserver;
use App\Observers\BookshopObserver;
use App\Observers\EditorialObserver;
use App\Observers\MediObserver;
use App\Observers\PostObserver;
use App\Observers\UserObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        Book::observe(BookObserver::class);
        Acte::observe(ActeObserver::class);
        Autor::observe(AutorObserver::class);
        Bookshop::observe(BookshopObserver::class);
        Editorial::observe(EditorialObserver::class);
        Medi::observe(MediObserver::class);
        Post::observe(PostObserver::class);
        User::observe(UserObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
