<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**
 * @test
 */
    public function authRedirect()
    {
        $response = $this->get('/admin/stats');

        $response->assertRedirect('/');
    }
/**
 * @test
 */
    public function authSession()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
                         ->withSession(['foo' => 'bar'])
                         ->get('/');
        $response->assertStatus(200);
    }
}
