<?php

namespace Almazary\LaravelWordCensor\Middleware;

use Almazary\LaravelWordCensor\LaravelWordCensorFacade;
use Illuminate\Foundation\Http\Middleware\TransformsRequest;

class Replace extends TransformsRequest
{
    /**
     * Transform the given value.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return mixed
     */
    protected function transform($key, $value)
    {
        /**
         * ignore if contains in ignore list
         */
        if (in_array($key, config('laravel-word-censor.ignore_field_keys'))) return $value;

        return is_string($value) ? LaravelWordCensorFacade::replace($value) : $value;
    }
}
