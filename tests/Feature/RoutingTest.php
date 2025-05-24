<?php

namespace Tests\Feature;

use Tests\TestCase;

class RoutingTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testGet()
    {
        $this->get('/pzn')
            ->assertStatus(200)
            ->assertSeeText('Hello Programmer ');
    }

    public function testYoutubeRedirectsToPzn()
    {
        $response = $this->get('/youtube');

        $response->assertRedirect('/pzn');
    }
}
