<?php

namespace ChinLeung\StrAccentsMacro\Tests;

use ChinLeung\StrAccentsMacro\StrAccentsMacroServiceProvider;
use Illuminate\Support\Str;
use Orchestra\Testbench\TestCase;

class MacroTest extends TestCase
{
    /** @test **/
    public function a_string_can_be_cleaned() : void
    {
        $this->assertEquals(
            'aaaceeeeiiooAAACEEEEIIOO',
            Str::removeAccents('àâäçéèêëîïôöÀÂÄÇÉÈÊËÎÏÔÖ')
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            StrAccentsMacroServiceProvider::class,
        ];
    }
}
