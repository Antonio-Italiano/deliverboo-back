<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                'name' => 'Pizzeria da Ciccio',
                'address' => 'Via Lecco 27, Milano',
                'phone_number' =>  '0683649637',
                'description' =>  'Una pizzeria accogliente e informale che serve deliziose pizze cotte a legna, accompagnate da bevande fresche e una vasta selezione di antipasti e dessert.',
                'min_order' =>  '10.00',
                'shipment_price' =>  '1.99',
                'logo' =>  'https://images-ext-2.discordapp.net/external/Cc9Aos_9plvpTJttTpmsiExKFSDgmUXKLtrGIIWytac/https/img.italiaonline.it/0WO5p000003zlz6GAA_LogoCiccio.png',
            ],
            [
                'name' => 'Shizen',
                'address' => 'Via V. Bachelet 22, Viterbo',
                'phone_number' => '0761251242',
                'description' => "Un ristorante giapponese specializzato in sushi fresco e preparato al momento, con una vasta scelta di roll, nigiri e sashimi, serviti in un'atmosfera elegante e raffinata.",
                'min_order' => '15.00',
                'shipment_price' => '0.99',
                'logo' => 'https://t4.ftcdn.net/jpg/02/04/59/29/360_F_204592936_rvFaR64FC4hEXaNzdCrti7fNdRIjNYN4.jpg'
            ],
            [
                'name' => 'Shaan',
                'address' => 'Via V. Bachelet 25, Milano',
                'phone_number' => '3299557452',
                'description' => "Il Ristorante Shaan nasce nella primavera del 2012 come realizzazione del sogno di Lucky, fin da subito la missione del locale è di portare a Bergamo un angolo latino che sposa la cucina messicana con i piatti della tradizione culinaria spagnola e portate a base di carne argentina.",
                'min_order' => '10.00',
                'shipment_price' => '3.99',
                'logo' => 'https://us.123rf.com/450wm/seamartini/seamartini1701/seamartini170100559/69602677-segno-ristorante-messicano-vector-l-emblema-isolato-con-le-icone-del-cappello-del-sombrero-e-del.jpg'
            ],
            [
                'name' => 'McDonald',
                'address' => 'Via allessandrini 5, Milano',
                'phone_number' => '329874587',
                'description' => "La McDonald's Corporation è una catena di ristoranti di fast food statunitense.",
                'min_order' => '10.00',
                'shipment_price' => '0.99',
                'logo' => 'https://ilfattoalimentare.it/wp-content/uploads/2015/09/20091207142611McDonalds.png'
            ],
            [
                'name' => 'Aloha Poke',
                'address' => 'Via manzoni 3, Milano',
                'phone_number' => '367521584',
                'description' => "Take Away hawaiano. Ricette gustosissime a base di pesce e carne accompagnate da riso e guarnite con salse cremosissime, servite in graziosi poké facili da consumare e da trasportare. La nuova frontiera del take away arriva dalle Hawaii.",
                'min_order' => '5.00',
                'shipment_price' => '4.99',
                'logo' => 'https://lirp.cdn-website.com/c7648cba/dms3rep/multi/opt/logo1-640w.PNG'
            ],
            [
                'name' => 'Sani Sapori',
                'address' => 'Piazza Garibaldi 7, Milano',
                'phone_number' => '3296370755',
                'description' => "Sani Sapori è una gastronomia vegetariana/vegana/intolleranze con possibilità di consumazione al tavolo, un' attenzione alle materie prime e al benessere della persona. La nostra cucina riflette la convinzione che la qualità del cibo migliori la qualità della vita",
                'min_order' => '10.00',
                'shipment_price' => '3.99',
                'logo' => 'https://www.botteghediseriate.it/wp-content/uploads/2021/03/Sani-Sapori-LOGO.jpg'
            ],
            [
                'name' => 'Panghea',
                'address' => 'Via Filippo Argelati 3, Milano',
                'phone_number' => '3467340985',
                'description' => "La Qualità & la Sostenibilità sono i nostri cavalli di battaglia.
                Siamo un ristorante di alta cucina vegetale e senza glutine, tutti i nostri piatti sono realizzati con ingredienti biologici.",
                'min_order' => '15.00',
                'shipment_price' => '5.00',
                'logo' => 'https://scontent.ffco2-1.fna.fbcdn.net/v/t39.30808-6/277565465_2534291633372665_1857990092962791063_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=elAWlzwXaYkAX-BS02g&_nc_ht=scontent.ffco2-1.fna&oh=00_AfDq1CRkCG1wT73adOSKz53UZTas6BwkHL8_9aI5iNHXHw&oe=64429487'
            ],
            [
                'name' => 'Osteria La Cala',
                'address' => 'Via Cesare Correnti 6,  Milano',
                'phone_number' => '3888524482',
                'description' => "Specialità sarde a base di pesce proposte in un locale familiare con pietra a vista e grandi dipinti marinari.",
                'min_order' => '10.00',
                'shipment_price' => '5.00',
                'logo' => 'https://img.freepik.com/premium-vector/minimal-fish-restaurant-logo-template_416562-1122.jpg'
            ],
            [
                'name' => 'Mido',
                'address' => 'Via Pietro Custodi 4, Milano',
                'phone_number' => '3966484425',
                'description' => "Kebab e piatti per vegetariani-vegani e celiaci tra archi arabi e lampade sospese in un locale familiare.",
                'min_order' => '10.00',
                'shipment_price' => '5.00',
                'logo' => 'https://scontent.ffco2-1.fna.fbcdn.net/v/t39.30808-6/305197610_455071723304299_2033526417087401785_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=axwwnDI1npMAX9hbzcf&_nc_ht=scontent.ffco2-1.fna&oh=00_AfDAWXYy2K3SqYeoj5xcOWZmxrtsJesMxIp--rl5A64Cog&oe=64428FAF'
            ],
            [
                'name' => 'Da Giò',
                'address' => 'Via Pietro 17, Milano',
                'phone_number' => '325989854',
                'description' => "Pizzeria con forno a legna per la vera pizza napoletana",
                'min_order' => '5.00',
                'shipment_price' => '5.00',
                'logo' => 'https://scontent.ffco2-1.fna.fbcdn.net/v/t39.30808-6/276299853_110371384940941_1965793379746839814_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=174925&_nc_ohc=AGTTm32EiE4AX-kk6qx&_nc_ht=scontent.ffco2-1.fna&oh=00_AfAw2AoNwfh0sd8OHTMcVZ3ogqgNiZCEnTQFYHeXl_vlJg&oe=6441F1AA'
            ],
            [
                'name' => 'Yang',
                'address' => 'Via valverde 7, Milano',
                'phone_number' => '3358383841',
                'description' => "ti aspettano 180 portate tra sushi e cucina asiatica. Un vero viaggio nel gusto tra tradizione e modernità. Tutto nei nostri locali eleganti e moderni e con l attenzione del nostro staff esperto.",
                'min_order' => '15.00',
                'shipment_price' => '3.99',
                'logo' => 'https://www.papido.it//bergamo/upload/yang-logo-82135.jpg'
            ],
            [
                'name' => 'Mexican Taco Food',
                'address' => 'Via vilati 26, Milano',
                'phone_number' => '3265452145',
                'description' => "il taco piu buono d' Italia qui da Mexican Taco Food",
                'min_order' => '10.00',
                'shipment_price' => '2.99',
                'logo' => 'https://us.123rf.com/450wm/soifer/soifer1712/soifer171200164/92032846-taco-logo-vettoriale-insegna-al-neon-su-cibo-messicano-tacos-cibo-di-strada-fast-food-snack.jpg?ver=6'
            ],
            [
                'name' => 'KFC',
                'address' => 'Via bettoni 127, Milano',
                'phone_number' => '3358383841',
                'description' => "da KFC trovi il vero pollo fritto del Kentucky.",
                'min_order' => '10.00',
                'shipment_price' => '3.99',
                'logo' => 'https://logowik.com/content/uploads/images/kfc-kentucky-fried-chicken-black8961.jpg'
            ],
            [
                'name' => 'I Love Poke',
                'address' => 'Via del monte salente 87, Milano',
                'phone_number' => '366752118',
                'description' => "Il vero Poke hawaiano",
                'min_order' => '5.00',
                'shipment_price' => '3.99',
                'logo' => 'https://www.confimprese.it/wp-content/uploads/2019/12/LOGO-I-LOVE-POKE.jpg'
            ],
            [
                'name' => 'Basilic',
                'address' => 'Via del monte salente 232, Milano',
                'phone_number' => '3551485877',
                'description' => "da Basilic offriamo un menù ricco e sano per le persone Vegane e NON.",
                'min_order' => '15.00',
                'shipment_price' => '10.00',
                'logo' => 'https://uploads.turbologo.com/uploads/design/hq_preview_image/4616770/draw_svg20210518-15875-1twfsix.svg.png'
            ],
            [
                'name' => 'Agrolago',
                'address' => 'Via della piazza 36, Milano',
                'phone_number' => '366752118',
                'description' => "Agrolago una garazia di qualità e sapore.",
                'min_order' => '15.00',
                'shipment_price' => '4.99',
                'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmXbw0dstLawqhNAgbfDiI3jenBIkZDgmKJj4LmKT84ce3yk1kXeXnuEm15dnZEQT3ELc&usqp=CAU'
            ],
            [
                'name' => 'La Bussola',
                'address' => 'Via del mare 89, Milano',
                'phone_number' => '2325444425',
                'description' => "Tutti i sapori del mare",
                'min_order' => '5.00',
                'shipment_price' => '3.99',
                'logo' => 'https://www.bussolaristorante.it/bussolacms/wp-content/uploads/2019/02/Ristorante-Pizzeria-la-Bussola-Brescia-logo1.png'
            ],
            [
                'name' => 'Marrakech',
                'address' => 'Via mameli 4, Milano',
                'phone_number' => '3392672510',
                'description' => "I piatti tipici della cucina araba",
                'min_order' => '10.00',
                'shipment_price' => '1.99',
                'logo' => 'https://scontent.ffco2-1.fna.fbcdn.net/v/t39.30808-6/300526549_455341429973749_1212024902528083241_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=ApgAI6MO0NQAX-GG0wz&_nc_ht=scontent.ffco2-1.fna&oh=00_AfD_n6wv6u4EImJSJvliLD7OLRF7PmhZhi7Z9HtKNmQXpQ&oe=644195FF'
            ],
            [
                'name' => 'Gagliano',
                'address' => 'Via antonello 23 , Milano',
                'phone_number' => '3285421205',
                'description' => "la vera pizza napoletana.",
                'min_order' => '5.00',
                'shipment_price' => '2.99',
                'logo' => 'https://dcassetcdn.com/design_img/484365/147255/147255_3466526_484365_image.png'
            ],
            [
                'name' => 'Koki',
                'address' => 'Via stef 2317 , Milano',
                'phone_number' => '329633124',
                'description' => "sushi fresco e pietantze asiatiche.",
                'min_order' => '15.00',
                'shipment_price' => '1.99',
                'logo' => 'https://img.italiaonline.it/0WO5p000003E4N7GAK_Cattura.png'
            ],
            [
                'name' => 'Mexcal',
                'address' => 'Via messico 89, Milano',
                'phone_number' => '336254147',
                'description' => "Sapori del Messico.",
                'min_order' => '4.99',
                'shipment_price' => '3.99',
                'logo' => 'https://lirp.cdn-website.com/05e83f40/dms3rep/multi/opt/Logo-640w.png'
            ],
            [
                'name' => 'Burger King',
                'address' => 'Via centrale 65, Milano',
                'phone_number' => '322541876',
                'description' => "Il vero hamburger american style.",
                'min_order' => '10.00',
                'shipment_price' => '1.99',
                'logo' => 'https://scontent.ffco2-1.fna.fbcdn.net/v/t1.6435-9/136459938_3828845680492543_175418795296524791_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=gwNafJxqBsoAX-WgKQI&_nc_ht=scontent.ffco2-1.fna&oh=00_AfBVfIZ0dEROPA8IKd2jPYIiUQJ611-yJkENpwzATxumAw&oe=6464BBD7'
            ],
            [
                'name' => 'I poke You',
                'address' => 'Via antonio locatelli 18, Milano',
                'phone_number' => '32963147852',
                'description' => "Poke con prodotti di prima scelta.",
                'min_order' => '5.00',
                'shipment_price' => '1.99',
                'logo' => 'https://images-platform.99static.com//IDnbpjNkYCpcWF-dG_sNc4q7gsg=/0x0:1772x1772/fit-in/500x500/99designs-contests-attachments/102/102405/attachment_102405393'
            ],
            [
                'name' => 'Culines',
                'address' => 'Via del marmo 345, Milano',
                'phone_number' => '32963750421',
                'description' => "menu salutare e ricco di gusto",
                'min_order' => '15.00',
                'shipment_price' => '10.00',
                'logo' => 'https://s3.amazonaws.com/thumbnails.venngage.com/template/b090db88-48d2-4129-9ce8-f7e3b555b743.png'
            ],
            [
                'name' => 'Bananas',
                'address' => 'Via delle banane 37, Milano',
                'phone_number' => '3266458214',
                'description' => "menu salutare e ricco di gusto",
                'min_order' => '10.00',
                'shipment_price' => '2.99',
                'logo' => 'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/organic-vegetarian-cuisine-restaurant-logo-design-template-3b5d7b17568e0254dae37f8abe45ec17_screen.jpg?ts=1561474136'
            ],
            [
                'name' => 'Corsair',
                'address' => 'Via del mare 25, Milano',
                'phone_number' => '3296701254',
                'description' => "tutti i sapori del mare",
                'min_order' => '10.00',
                'shipment_price' => '5.99',
                'logo' => 'https://images-platform.99static.com//_ne5nqnARkZsWQGfYD8d9NfzQ-o=/137x866:847x1577/fit-in/500x500/99designs-contests-attachments/84/84176/attachment_84176187'
            ],
            [
                'name' => 'Diwan',
                'address' => 'Via monte leone 31, Milano',
                'phone_number' => '32963170254',
                'description' => "Accogliente locale arabo ben organizzato",
                'min_order' => '10.00',
                'shipment_price' => '1.99',
                'logo' => 'https://i.pinimg.com/originals/c0/e5/b4/c0e5b4461cfbd282edd77329106c6583.jpg'
            ],
        ];

        foreach ($restaurants as $restaurant) {
            $new_restaurant = new Restaurant();

            $new_restaurant->fill($restaurant);

            $new_restaurant->save();
        }
    }
}
