<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderSaveTest extends TestCase
{

    use RefreshDatabase;

    /**
     * Test new order creation
     *
     * @return void
     */
    public function testNewOrderCreation()
    {
        $response = $this->postJson('/api/order/save',
            [
                'first_name' => 'Test',
                'last_name'  => 'Test',
                'email'      => 'test@test.com',
                'phone'      => '4393934888',
                'address'    => 'Address st. 1 apt.10',
                'cart'       => '[{"id":2,"name":"Pepperoni","price":12,"quantity":3},{"id":6,"name":"Veggie","price":11,"quantity":2},{"id":1,"name":"Margarita","price":10,"quantity":1}]'
            ]
        );

        $response
            ->assertStatus(200)
            ->assertJson([
                'status' => 'success',
            ]);
    }
}
