<?php

namespace App\Http\Controllers\Winter;

use App\Data\RestaurantMenuData;
use App\Models\RestaurantMenu;

class RestaurantController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        seo()->title('Restaurace');

        $foodMenu = RestaurantMenu::published()
            ->byType('food')
            ->latestMenu()
            ->first();

        $drinksMenu = RestaurantMenu::published()
            ->byType('drinks')
            ->latestMenu()
            ->first();

        return inertia('Restaurant', [
            'foodMenu' => $foodMenu ? RestaurantMenuData::fromModel($foodMenu) : null,
            'drinksMenu' => $drinksMenu ? RestaurantMenuData::fromModel($drinksMenu) : null,
        ]);
    }
}
