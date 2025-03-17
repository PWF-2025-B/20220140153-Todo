<?php

use Tests\TestCase;

test('example', function () {
    expect(true)->toBeTrue();
});

class EnvironmentTest extends TestCase
{
    public function testEnv()
    {
        $appName = env("YOUTUBE", "default_value");

        self::assertEquals("Programmer Zaman Now", $appName);
    }
}
