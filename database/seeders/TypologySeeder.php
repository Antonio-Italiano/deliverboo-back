<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Typology;

class TypologySeeder extends Seeder
{

    public function run(): void
    {
        $types = [
            [
                'name' => 'Pizza',
                'image' => 'https://images.ctfassets.net/nw5k25xfqsik/z5wDOVu5NTc9B9UR2gBPc/4e450952bb68f6a3b9a4a2def5cab877/20220211142645-margherita-9920.jpg?w=1024'
            ],
            [
                'name' => 'Sushi',
                'image' => 'https://www.nonsprecare.it/wp-content/uploads/2018/11/cosa-sapere-sul-sushi.jpg'
            ],
            [
                'name' => 'Messicano',
                'image' => 'https://cdn.discordapp.com/attachments/1090199171568500760/1090932785465786388/16801690350286996254972283672915.jpg'
            ],
            [
                'name' => 'Fast-Food',
                'image' => 'https://cdn.discordapp.com/attachments/1090199171568500760/1090933497922863135/photo-1568901346375-23c9450c58cd.jpeg'
            ],
            [
                'name' => 'Poke',
                'image' => 'https://ricetteracconti.com/wp-content/uploads/2022/07/poke.png'
            ],
            [
                'name' => 'Vegano',
                'image' => 'https://i0.wp.com/post.healthline.com/wp-content/uploads/2021/08/tofu-salad-pineapple-quinoa-vegan-meal-1296x728-header.png?w=1155&h=1528'
            ],
            [
                'name' => 'Vegetariano',
                'image' => 'https://images.everydayhealth.com/images/what-is-a-vegan-diet-benefits-food-list-beginners-guide-alt-1440x810.jpg?sfvrsn=1d260c85_1'
            ],
            [
                'name' => 'Pesce',
                'image' => 'https://www.cucchiaio.it/content/cucchiaio/it/articoli/2021/07/secondi-pesce-estate-migliori-ricette-facili/jcr:content/page_images/ogImage.img.jpg/1659370763604.jpg'
            ],
            [
                'name' => 'Arabo',
                'image' => 'https://siviaggia.it/wp-content/uploads/sites/2/2019/10/cucina-marocchina.jpg'
            ],
        ];

        foreach ($types as $type) {
            $new_type = new Typology();
            $new_type->fill($type);
            $new_type->save();
        }
    }
}
