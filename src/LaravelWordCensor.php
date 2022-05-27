<?php

namespace Almazary\LaravelWordCensor;

class LaravelWordCensor
{
    public function replace($string = null)
    {
        /**
         * check empty
         */
        if (empty($string)) {
            return $string;
        }

        $result = [];

        /**
         * split by space
         */
        $words = explode(' ', $string);
        foreach ($words as $word) {
            $result[] = ($this->isContainBadWord($word)) ? str_replace(config('laravel-word-censor.words'), '***', strtolower($word)) : $word;
        }

        return implode(' ', $result);
    }

    public function isContainBadWord($string = null)
    {
        /**
         * check empty
         */
        if (empty($string)) {
            return $string;
        }

        /**
         * check per word
         */
        foreach (config('laravel-word-censor.words') as $v) {
            if (strtolower(strip_tags($string)) == $v) {
                return true;
            }
        }

        return false;
    }
}
