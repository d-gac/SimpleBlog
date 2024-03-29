<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Header;
use App\Models\Instance;
use App\Models\Post;
use App\Models\Tag;
use App\Observers\CategoryObserver;
use App\Observers\HeaderObserver;
use App\Observers\InstanceObserver;
use App\Observers\PostObserver;
use App\Observers\TagObserver;
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
     *
     * @return void
     */
    public function boot()
    {
        Post::observe(PostObserver::class);
        Category::observe(CategoryObserver::class);
        Tag::observe(TagObserver::class);
        Header::observe(HeaderObserver::class);
        Instance::observe(InstanceObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
