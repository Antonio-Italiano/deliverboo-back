<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'vat_number' => ['string','unique:'.User::class,'max:11', 'min:11']

        ],[
            'name.required' => 'il nome deve essere obbligatorio',
            'email.required' => 'l\' email è obbligatoria',
            'email.unique' => 'Questa email è già stata usata',
            'password.required' => 'la password è obbligatoria',
            'password.confirmed' => 'la password non corrisponde',
            'vat_number.unique' => 'Questa partita iva è già stata usata',
            'vat_number.min' => 'La partita iva deve essere :min caratteri',
            'vat_number.max' => 'La partita iva deve essere :max caratteri',




        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'vat_number' => $request->vat_number,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
