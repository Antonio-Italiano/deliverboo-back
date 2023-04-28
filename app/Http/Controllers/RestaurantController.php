<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use App\Models\Restaurant;
use App\Models\Typology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::id();
        $restaurants = Restaurant::where('user_id', $user)->get();
        return view('admin.restaurants.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typologies = Typology::all();
        $user = Auth::id();
        $restaurants = Restaurant::where('user_id', $user)->get();

        if ((count($restaurants) == 1)) {
            return to_route('admin.restaurants.index');
        }
        $restaurant = new Restaurant();

        return view('admin.restaurants.create', compact('restaurant', 'typologies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:40',
            'description' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,jpg,png',
            'address' => 'nullable|string',
            'phone_number' => 'nullable|string|max:13',
            'min_order' => 'nullable|numeric|min:0',
            'shipment_price' => 'nullable|numeric|min:5',
            'typologies' => 'nullable|exists:typologies,id'

        ], [
            'name.required' => 'Il nome del ristorante è obbligatorio',
            'name.min' => 'Il nome del ristorante deve avere almeno :min caratteri',
            'name.max' => 'Il nome del ristorante deve avere massimo :max caratteri',
            'logo.mimes' => "l'immagine deve essere di tipo :mimes",
            'phone_number.max' => 'il numero di telefono deve avere max :max caratteri',
            'min_order.min' => 'il prezzo dell\'ordine non deve essere inferiore a :min €',
            'shipment_price.min' => 'il prezzo della spedizione non deve essere inferiore a :min €',
            'typologies' => 'lw tipologie selezionate non sono valide'



        ]);

        $restaurant = new Restaurant();


        $data = $request->all();
        if (Arr::exists($data, 'logo')) {
            // if ($restaurant->logo) Storage::delete($restaurant->logo);
            $img_url = Storage::put('restaurants', $data['logo']);
            // $full_img_path =  url('storage/' . $img_url);
            $data['logo'] = $img_url;
        }

        $restaurant->fill($data);

        $restaurant->user_id = Auth::id();

        $restaurant->save();
        // Relaziono il post con il / i tag
        if (Arr::exists($data, 'typologies')) $restaurant->typologies()->attach($data['typologies']);

        return to_route('admin.restaurants.show', $restaurant->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
        return view('admin.restaurants.show', compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        $typologies = Typology::all();
        $user = Auth::id();
        $restaurants = Restaurant::where('user_id', $user)->get();
        $restaurants_typologies = $restaurant->typologies->pluck('id')->toArray();


        return view('admin.restaurants.edit', compact('restaurant',  'typologies', 'restaurants_typologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:40',
            'description' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,jpg,png',
            'address' => 'nullable|string',
            'phone_number' => 'nullable|string|max:13',
            'min_order' => 'nullable|numeric|min:0|max:100',
            'shipment_price' => 'nullable|numeric|min:5|max:50',
            'typologies' => 'nullable|exists:typologies,id'

        ], [
            'name.required' => 'Il nome del ristorante è obbligatorio',
            'name.min' => 'Il nome del ristorante deve avere almeno :min caratteri',
            'name.max' => 'Il nome del ristorante deve avere massimo :max caratteri',
            'logo.mimes' => "l'immagine deve essere di tipo :mimes",
            'phone_number.max' => 'il numero di telefono deve avere max :max caratteri',
            'min_order.min' => 'il prezzo dell\'ordine minimo non deve essere inferiore a :min €',
            'min_order.max' => 'il prezzo dell\'ordine minimo non deve essere superiore a :max €',
            'shipment_price.min' => 'il prezzo della spedizione non deve essere inferiore a :min €',
            'shipment_price.max' => 'il prezzo della spedizione non deve essere superiore a :max €',
            'typologies' => 'le tipologie selezionate non sono valide'
        ]);





        $data = $request->all();
        if (Arr::exists($data, 'logo')) {
            if ($restaurant->logo) Storage::delete($restaurant->logo);
            $img_url = Storage::put('restaurants', $data['logo']);
            $data['logo'] = $img_url;
        }


        $restaurant->user_id = Auth::id();


        $restaurant->update($data);

        if (Arr::exists($data, 'typologies')) $restaurant->typologies()->sync($data['typologies']);




        return to_route('admin.restaurants.show', compact('restaurant'))->with('type', 'success')->with('msg', "Il ristorante '$restaurant->name' è stato modificato con successo.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {

        if ($restaurant->image) Storage::delete($restaurant->image);
        // if (count($restaurant->typologies)) $restaurant->typologies()->detach();

        // DA VEDERE
        if ($restaurant->foods) {
            $foods = $restaurant->foods->pluck('restaurant_id')->toArray();
            DB::table('foods')->whereIn('restaurant_id', $foods)->delete();
        };

        $restaurant->delete();
        return to_route('admin.restaurants.index')->with('type', 'danger')->with('msg', "Il ristorante '$restaurant->name' è stato cancellato con successo.");
    }
}
