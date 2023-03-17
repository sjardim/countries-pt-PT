<?php

declare(strict_types=1);

namespace Squire;

use Illuminate\Support\ServiceProvider;
use Squire\Models\Country;

class CountriesPtPtServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Repository::registerSource(Country::class, 'pt-PT', __DIR__.'/../resources/data.csv');
    }
}
