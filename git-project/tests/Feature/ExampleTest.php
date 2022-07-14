<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    
    public function testBasicTest()
    {
        $user = Feature(\App\User::class)->create();
        $response = $this->actingAs($user)->get('/');
        $response->assertStatus(200);
    }
}