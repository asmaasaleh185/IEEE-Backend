<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
use App\Policies\BookPolicy;

class AppServiceProvider extends ServiceProvider
{
    
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(Book::class, BookPolicy::class);
        Gate::policy(Category::class, BookPolicy::class);
        Gate::policy(Author::class, BookPolicy::class);

    }
}