<?php

namespace Billowsc3hub\LaravelPackageBoilerPlate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Billowsc3hub\LaravelPackageBoilerPlate\Skeleton\SkeletonClass
 */
class LaravelPackageBoilerPlateFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-package-boilerplate';
    }
}
