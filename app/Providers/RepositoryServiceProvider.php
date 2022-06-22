<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Order\OrderInterface;
use App\Repository\Order\OrderRepository;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            OrderInterface::class,
            OrderRepository::class
        );
    }

}