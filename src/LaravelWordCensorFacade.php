<?php

namespace Almazary\LaravelWordCensor;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Almazary\LaravelWordCensor\Skeleton\SkeletonClass
 */
class LaravelWordCensorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-word-censor';
    }
}
