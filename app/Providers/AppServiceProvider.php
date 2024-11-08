<?php

namespace App\Providers;

use App\Contracts\Interfaces\CategoryInterface;
use App\Contracts\Interfaces\EmployeeJobInterface;
use Illuminate\Support\ServiceProvider;
use App\Contracts\Interfaces\NewsInterface;
use App\Contracts\Repositories\CategoryRepository;
use App\Contracts\Repositories\EmployeeJobRepository;
use App\Contracts\Repositories\NewsRepository;
use App\Contracts\Repositories\SubjectRepository;
use App\Contracts\Interfaces\SubjectInterface;


class AppServiceProvider extends ServiceProvider
{

    private array $register = [
        NewsInterface::class => NewsRepository::class,
        CategoryInterface::class => CategoryRepository::class,
        EmployeeJobInterface::class => EmployeeJobRepository::class,
        SubjectRepository::class => SubjectInterface::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->register as $index => $value) $this->app->bind($index, $value);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
