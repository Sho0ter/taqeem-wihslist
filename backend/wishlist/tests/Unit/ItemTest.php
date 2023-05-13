<?php

namespace Tests\Unit;

use App\Models\Item;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;


class ItemTest extends TestCase
{
    use WithoutMiddleware;
    use WithFaker;

    /**
     * An index items unit test example.
     *
     * @return void
     */
    public function test_index_items()
    {
        $response = $this->get('/api/items');

        $response->assertStatus(200);
    }

    /**
     * An create item unit test example.
     *
     * @return void
     */
    public function test_create_item()
    {
        $response = $this->withHeader('Accept', 'application/json')->post('/api/items/', [
            'name' => $this->faker->word(),
            'seller' => $this->faker->firstname(),
            'price' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 1, $max = 1000)
        ]);

        $response->assertStatus(201);
    }


    /**
     * An create item fail unit test example.
     *
     * @return void
     */
    public function test_create_item_fail()
    {
        $response = $this->withHeader('Accept', 'application/json')->post('/api/items/', [
            'name' => $this->faker->word(6),
            'seller' => $this->faker->firstname(),
        ]);

        $response->assertStatus(422);
    }
}
