<?php

namespace Database\Seeders;

use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::factory()->count(200)->create();

        // create items with created_at at the first of this year 
        Item::factory(['created_at' => Carbon::now()->firstOfYear()])->count(5)->create();
    }
}
