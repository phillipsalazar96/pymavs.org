<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UrlTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testUrlForcategory()
    {
        $response = $this->get('/blog/category/tutorials');
        $response->assertStatus(200);   

        $response = $this->get('/blog/category/blogs');
        $response->assertStatus(200);

        $response = $this->get('blog/category/events');
        $response->assertStatus(200);

        $response = $this->get('blog/category/lol');
        $response->assertstatus(404);

        $response = $this->get('blog/create')->followingRedirects()->get('/');
        //$response->dumpHeaders();
    }
}
