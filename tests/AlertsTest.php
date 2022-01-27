<?php

namespace Tests;

use Illuminate\Foundation\Testing\Concerns\MakesHttpRequests;
use NunoMaduro\LaravelMojito\InteractsWithViews;

class AlertsTest extends TestCase
{
    use InteractsWithViews;
    /** @test */
    public function test_warning_alert()
    {
        $this->assertView('bcl::tests.alerts')->contains('This is a warning alert');

    }
}
