<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Contracts\Database\Eloquent\Builder;
use App\Models\Restaurant;
use App\Models\Typology;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $typeIds = explode(',', $request->query('types'));

        if (!$typeIds[0]) {
            $typeIds[0] = "all";
        }
        if ($typeIds[0] == "all") {
            $restaurants = Restaurant::with('typologies')->get();
        } elseif ($typeIds) {
            $restaurants =  Restaurant::whereHas('typologies', function (Builder $query) use ($typeIds) {
                $query->whereIn('typology_id', $typeIds);
            }, '=', count($typeIds))->get();
        }

        foreach ($restaurants as $restaurant) {
            // dd(strpos($restaurant->logo, "restaurants/") == false, $restaurant->logo);
            if ($restaurant->logo && !str_contains($restaurant->logo, "https://")) $restaurant->logo = url('storage/' . $restaurant->logo);
        }
        return response()->json($restaurants);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $foods = Food::where('is_public', true)->where('restaurant_id', $id)->get();
        $restaurant = Restaurant::where('id', $id)->first();
        if (!$restaurant) return response(null, 404);

        foreach ($foods as $food) {
            if ($food->image && !str_contains($food->image, "https://")) $food->image = url('storage/' . $food->image);
        }
        if ($restaurant->logo && !str_contains($restaurant->logo, "https://")) $restaurant->logo = url('storage/' . $restaurant->logo);
        return response()->json(compact('restaurant', 'foods'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
