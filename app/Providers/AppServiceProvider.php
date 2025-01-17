<?php

namespace App\Providers;

use App\Models\Boiler;
use App\Models\Post;
use App\Models\Category;
use App\Models\LocalSEO;
use App\Models\Project;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Spatie\Health\Checks\Checks\DatabaseCheck;
use Spatie\Health\Checks\Checks\DatabaseConnectionCountCheck;
use Spatie\Health\Checks\Checks\DatabaseSizeCheck;
use Spatie\Health\Checks\Checks\DatabaseTableSizeCheck;
use Spatie\Health\Facades\Health;
use Spatie\Health\Checks\Checks\OptimizedAppCheck;
use Spatie\Health\Checks\Checks\DebugModeCheck;
use Spatie\Health\Checks\Checks\EnvironmentCheck;
use Spatie\Health\Checks\Checks\PingCheck;
use Spatie\Health\Checks\Checks\QueueCheck;
use Spatie\Health\Checks\Checks\RedisCheck;
use Spatie\Health\Checks\Checks\RedisMemoryUsageCheck;
use Spatie\Health\Checks\Checks\ScheduleCheck;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // Use view composer to share recent blog posts with the navbar
        View::composer(['components.navbar', 'components.footer', 'components.blog-side-bar'], function ($view) {
            $recentBlogPosts = Post::latest()->take(5)->get();
            $allCategories = Category::all();
            $boilers = Boiler::all();
            $view->with([
                'recentBlogPosts' => $recentBlogPosts,
                'categories' => $allCategories,
                'boilers' => $boilers
            ]);
        });

        Health::checks([
            DebugModeCheck::new(),
            DatabaseCheck::new(),
            DatabaseConnectionCountCheck::new(),
            DatabaseSizeCheck::new(),
            DatabaseTableSizeCheck::new(),
        ]);
    }
}
