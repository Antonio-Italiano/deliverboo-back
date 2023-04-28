<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'address'=>'via aldo moro, 5',
                'total_order'=> '25.00',
                'guest_name'=> 'Pippo Lanci',
                'phone_number'=> '3567892125678',
                'status'=> true
            ]
            ];

         foreach($orders as $order){
            $new_order = new Order();
            $new_order->fill($order);
            $new_order->save();

         }   
    }
}
