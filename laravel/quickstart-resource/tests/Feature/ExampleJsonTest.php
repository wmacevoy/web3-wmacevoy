<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Testing\Fluent\AssertableJson;

class ExampleJsonTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_fluent_json()
    {
        $response = $this->getJson('/api/task/1');
    
        $response
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('id', 1)
                     ->etc()
            );
    }
}
