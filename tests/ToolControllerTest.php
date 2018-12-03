<?php

namespace Boarrd\Twitter\Tests;

use Boarrd\Twitter\Http\Controllers\ToolController;
use Boarrd\Twitter\Twitter;
use Symfony\Component\HttpFoundation\Response;

class ToolControllerTest extends TestCase
{
    /** @test */
    public function it_can_can_return_a_response()
    {
        $this
            ->get('nova-vendor/boarrd/boarrd-twitter/endpoint')
            ->assertSuccessful();
    }
}
