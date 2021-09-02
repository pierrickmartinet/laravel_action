<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MaRouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/maroute');

        $response->assertStatus(200);
        $response->assertSee('coucou');
    }

    public function test404(){
        $response = $this->get('/blabla');
        $response->assertStatus(404);
    }
}