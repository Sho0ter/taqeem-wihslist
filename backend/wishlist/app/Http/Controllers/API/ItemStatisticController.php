<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ItemStatisticResource;
use App\Models\Item;

class ItemStatisticController extends Controller
{
    public function total_price()
    {
        $items_total_price = Item::thisMonth()->get()->sum('price');

        $data = [
            'type' => 'items_total_price',
            'value' => $items_total_price,
        ];

        return new ItemStatisticResource((object)$data);
    }

    public function average_price()
    {
        $items_average_price = Item::all()->avg('price');

        $data = [
            'type' => 'items_average_price',
            'value' => $items_average_price,
        ];

        return new ItemStatisticResource((object)$data);
    }
}
