<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InvalidGetWeatherTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testInvalidGetWeatherTest()
    {
        $response = $this->get('api/weather/InvalidCity');
        $response->assertStatus(404)
                 ->assertJson([
                    'cod' => '404',
                    'message' => 'city not found'
                 ]);
    }
}
