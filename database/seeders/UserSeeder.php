<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Utente';
        $user->email = 'prova@email.it';
        $user->vat_number = '1234556784';
        $user->password = 'password';
        $user->save();
    }
}
