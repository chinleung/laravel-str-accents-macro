<?php

namespace ChinLeung\StrAccentsMacro;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class StrAccentsMacroServiceProvider extends ServiceProvider
{
    const CHARACTERS = [
        'à' => 'a', 'â' => 'a', 'ä' => 'a',
        'ç' => 'c',
        'é' => 'e', 'è' => 'e', 'ê' => 'e', 'ë' => 'e',
        'î' => 'i', 'ï' => 'i',
        'ô' => 'o', 'ö' => 'o',
        'À' => 'A', 'Â' => 'A', 'Ä' => 'A',
        'Ç' => 'C',
        'É' => 'E', 'È' => 'E', 'Ê' => 'E', 'Ë' => 'E',
        'Î' => 'I', 'Ï' => 'I',
        'Ô' => 'O', 'Ö' => 'O',
    ];

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Str::macro('removeAccents', [$this, 'removeAccents']);
    }

    /**
     * Remove the accented characters from a string.
     *
     * @param  string  $value
     * @return string
     */
    public function removeAccents(string $value) : string
    {
        return str_replace(
            array_keys(static::CHARACTERS),
            array_values(static::CHARACTERS),
            $value
        );
    }
}
