<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{

    use RefreshDatabase;

    /**
     * Test endpoint that returns product information by array of IDs
     *
     * @return void
     */
    public function testGetProductsByIds()
    {


        $response = $this->call('POST', '/api/getProducts', ['productIDs' => [2, 4, 6]]);


        $response
            ->assertStatus(200)
            ->assertJsonStructure(
                [ '*' => [ 'id', 'name', 'description', 'price', 'category' ]]
            );
    }
}
