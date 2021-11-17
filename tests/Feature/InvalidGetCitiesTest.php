<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InvalidGetCitiesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testInvalidGetCitiesTest()
    {
      $response = $this->get('api/InvalidCities');
      $response->assertStatus(404)
               ->assertJson([
                'errors' => 'The Specified URL Not found'
               ]);
    }
}
