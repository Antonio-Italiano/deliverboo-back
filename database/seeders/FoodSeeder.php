<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $pizzaTypes = [
            [
                'name' => 'Marinara',
                'price' => '5.50',
                'image' =>  'https://ilsalvagente.it/wp-content/uploads/2022/06/pizza-696x464.jpeg',
                'description' => 'farina, pomodoro',
                'is_public' => true,
            ],
            [
                'name' => 'Margherita',
                'price' => '6.50',
                'image' =>  'https://www.scattidigusto.it/wp-content/uploads/2018/03/pizza-margherita-originale-Scatti-di-Gusto-1568x821.jpg',
                'description' => 'farina, pomodoro, mortadella, mozzarella',
                'is_public' => true,
            ],
            [
                'name' => 'Napoli',
                'price' => '8.50',
                'image' =>  'https://www.donnamoderna.com/content/uploads/2021/08/pizza-napoli.jpg',
                'description' => 'pomodoro, mozzarella, acciughe, origano',
                'is_public' => true,
            ],
            [
                'name' => 'Salame piccante',
                'price' => '8.50',
                'image' =>  'https://www.petitchef.it/imgupl/recipe/la-pizza-salame-piccante-e-pomodorini-secchi-ma-anche-una-margherita--md-94185p135938.jpg',
                'description' => 'pomodoro , mozzarella e salame piccante',
                'is_public' => true,
            ],
            [
                'name' => '4 formaggi',
                'price' => '6.50',
                'image' =>  'https://media-cdn.tripadvisor.com/media/photo-s/0a/c2/e2/89/pizza-4-formaggi-con.jpg',
                'description' =>  'pomodoro , mozzarella e formaggi misti',
                'is_public' => true,
            ],
            [
                'name' =>  'Bufala',
                'price' => '8.50',
                'image' =>  'https://www.cuocicuoci.com/wp-content/uploads/2022/03/pizza-bufalotta.jpg',
                'description' =>  'pomodorini pachino, mozzarella di Bufala del caseificio Giordano, basilico fresco',
                'is_public' => true,
            ],
            [
                'name' =>  'Capricciosa',
                'price' => '8.00',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/2a/Pizza_capricciosa.jpg',
                'description' =>   'pomodoro, mozzarella, prosciutto cotto, funghi, carciofi, olive',
                'is_public' => true,
            ],
            [
                'name' =>  'Speck e zola',
                'price' => '7.00',
                'image' => 'https://www.silviocicchi.com/pizzachef/wp-content/uploads/2015/10/pizza-speck-e-goronzola-ev.jpg',
                'description' =>   'pomodoro, mozzarella, speck, zola',
                'is_public' => true,
            ],
            [
                'name' =>  'Prosciutto',
                'price' => '6.00',
                'image' => 'https://connexia-rovagnati-us-prod.s3.amazonaws.com/wp-content/uploads/2020/11/09161042/08_pizza-prosciutto.jpg',
                'description' =>    'pomodoro, mozzarella, prosciutto cotto',
                'is_public' => true,
            ],
            [
                'name' =>  'Funghi',
                'price' => '6.00',
                'image' => 'https://images.fidhouse.com/fidelitynews/wp-content/uploads/sites/6/2016/03/1457510916_110db3373692fa8c5a4526c9c5822483cdb11ffd-1046049218.jpg',
                'description' => 'pomodoro, mozzarella, funghi',
                'is_public' => true,
            ],
            [
                'name' =>  '4 stagioni',
                'price' => '8.00',
                'image' => 'https://wips.plug.it/cips/buonissimo.org/cms/2012/05/147574919_s.jpg',
                'description' =>   'pomodoro, mozzarella, prosciutto cotto, funghi, carciofi',
                'is_public' => true,
            ],
            [
                'name' =>    'Wurstel',
                'price' => '6.00',
                'image' => 'https://www.langolodelleprelibatezze.it/wp-content/uploads/2018/06/pizza-wurstel-gouda-ed-olive-taggiasche-lievito-madre-1.jpg',
                'description' => 'pomodoro, mozzarella, wurstel',
                'is_public' => true,
            ],
            [
                'name' =>  'Salsiccia',
                'price' => '6.50',
                'image' =>  'https://www.cuocicuoci.com/wp-content/uploads/2022/02/pizza-con-salsiccia.jpg',
                'description' =>  'pomodoro, mozzarella, salsiccia',
                'is_public' => true,
            ],
            [
                'name' =>  'Pugliese',
                'price' => '6.50',
                'image' =>  'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2020/03/12120728984128806761.jpeg',
                'description' =>  'pomodoro, pomodorini, origano',
                'is_public' => true,
            ],
            [
                'name' =>  'Tonno e cipolle',
                'price' => '7.50',
                'image' =>  'https://saporilucani.com/wp-content/uploads/2016/04/pizza-con-cipolle-e-tonno-saporilucani.jpg',
                'description' =>  'pomodoro, mozzarella, tonno, cipolle',
                'is_public' => true,
            ],
            [
                'name' =>  'Vegetariana',
                'price' => '7.50',
                'image' =>  'https://www.fruttaweb.com/consigli/wp-content/uploads/2018/06/pizza-vegana.jpg',
                'description' =>   'pomodoro, mozzarella e verdure grigliate',
                'is_public' => true,
            ],
            [
                'name' =>  'Bismark',
                'price' => '9.50',
                'image' =>  'https://www.ricettedicultura.com/wp-content/uploads/2017/05/pizza-bismark_1.jpg',
                'description' =>   'pomodoro, mozzarella, prosciutto cotto, uova, origano',
                'is_public' => true,
            ],
            [
                'name' =>  'Esotica',
                'price' => '10.50',
                'image' =>  'https://blog.giallozafferano.it/dolcesalatomiky/wp-content/uploads/2016/08/Untitled.jpg',
                'description' =>   'pomodoro, mozzarella, gamberoni, polpa di granchio',
                'is_public' => true,
            ],
            [
                'name' =>  'Contadina',
                'price' => '9.50',
                'image' =>  'https://live.staticflickr.com/8161/7672522142_17a7a6942a_b.jpg',
                'description' =>   'pomodoro, mozzarella, salamella trevigiana, prosciutto cotto, uova, funghi champignon',
                'is_public' => true,
            ],
            [
                'name' =>   'Cipolla rossa',
                'price' => '9.50',
                'image' =>   'https://www.funetta.it/_______vecchiowp/wp-content/uploads/2018/11/pizza_cipolla_rossa_pancetta.jpg',
                'description' =>   'pomodoro, mozzarella, cipolla rossa',
                'is_public' => true,
            ],
        ];

        // ASSEGNO RISTORANTI
        $pizzaRestaurants = ['1', '10', '17', '19']; {
            foreach ($pizzaRestaurants as $pizzaRestaurant)
                foreach ($pizzaTypes as $pizza) {
                    $new_food = new Food();
                    $new_food->fill($pizza);
                    $new_food->restaurant_id = $pizzaRestaurant;
                    $new_food->save();
                }
        }

        // CIBO ASIATICO
        $asiaTypes = [

            [
                'name' =>   'Ravioli alla griglia o al vapore',
                'price' => '13.50',
                'image' =>   'https://www.melarossa.it/wp-content/uploads/2020/01/ravioli-cinesi-1.jpg',
                'description' =>   'carne, pesce o verdure cotte al vapore o alla griglia',
                'is_public' => true,
            ],
            [
                'name' =>   'Involtini primavera',
                'price' => '10.00',
                'image' =>   'https://friggiadaria.it/wp-content/uploads/2022/07/involtino-primavera-500x500.jpg',
                'description' =>   'sfoglia è sottile e croccante ed è farcita con un mix di verdure dal sapore inconfondibile.',
                'is_public' => true,
            ],
            [
                'name' =>   'Riso alla cantonese',
                'price' => '9.50',
                'image' =>   'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/1dd71a6b-bd81-4a7a-8013-114c731d1165/Derivates/21db79a0-9d69-44d2-8852-6945bc8fc0de.jpg',
                'description' =>   'piselli, tocchetti di prosciutto cotto, uova insaporiscono bianchi chicchi sodi e gustosi.',
                'is_public' => true,
            ],
            [
                'name' =>   'Nuvole di drago',
                'price' => '5.50',
                'image' =>   'https://cdn.ilclubdellericette.it/wp-content/uploads/2020/01/ricetta-nuvole-di-drago-790x500.jpg',
                'description' =>   'cialde croccanti servite come accompagnamento ai piatti principali.',
                'is_public' => true,
            ],
            [
                'name' =>   'Spaghetti di riso',
                'price' => '8.50',
                'image' =>   'https://statics.cucchiaio.it/content/cucchiaio/it/ricette/2020/01/spaghetti-di-riso-con-verdure/jcr:content/header-par/image-single.img10.jpg/1579857299888.jpg',
                'description' =>   'spaghetti realizzati con farina di riso, conditi con verdure, carne o pesce in base ai gusti.',
                'is_public' => true,
            ],
            [
                'name' =>   'Pollo alle mandorle',
                'price' => '7.50',
                'image' =>   'https://cdn.ilclubdellericette.it/wp-content/uploads/2017/06/pollo-alle-mandorle-790x500.jpg',
                'description' =>   'bocconcini di tenero pollo conditi con una gustosa crema a base di salsa di soia e mandorle.',
                'is_public' => true,
            ],
            [
                'name' =>   'Anatra alla pechinese',
                'price' => '11.50',
                'image' =>    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRk9d1cMZ4ubs1bKiRD2fAm-i8lqCv5E5FddQ&usqp=CAU',
                'description' =>   'anatra croccante',
                'is_public' => true,
            ],
            [
                'name' =>   'Spaghetti con i frutti di mare',
                'price' => '9.50',
                'image' =>    'https://blog.giallozafferano.it/delizioso/wp-content/uploads/2015/09/1-spaghetti-cinesi-alluovo-e-frutti-di-mare.jpg',
                'description' =>   'spaghetti conditi con i frutti di mare e saltati alla piastra con salsa di soia e zenzero.',
                'is_public' => true,
            ],
            [
                'name' =>   'Gamberi alla piastra',
                'price' => '7.50',
                'image' =>    'https://res.cloudinary.com/tf-lab/image/upload/restaurant/1b6e8826-291f-4126-bfa7-cb38e8a3bc82/d4365aa1-487f-4ef0-8771-5a9ceb8e89f4.jpg',
                'description' =>   'gamberi arrostiti ed insaporiti solo con sale e pepe.',
                'is_public' => true,
            ],
            [
                'name' =>   'Gelato fritto',
                'price' => '3.50',
                'image' =>    'https://www.donnamoderna.com/content/uploads/2013/05/gelato-fritto-alla-cinese-725x545.jpg',
                'description' =>   'croccante sfoglia che avvolge una palla di morbido gelato.',
                'is_public' => true,
            ],
            [
                'name' =>   'Sushi',
                'price' => '7.50',
                'image' =>    'https://www.watabi.it/blog/wp-content/uploads/2020/06/piatti-giapponesi-sushi.jpg',
                'description' =>   'il sushi non ha bisogno di presentazioni',
                'is_public' => true,
            ],
            [
                'name' =>   'Tempura',
                'price' => '7.50',
                'image' =>    'https://www.watabi.it/blog/wp-content/uploads/2020/06/tempura-piatto-giapponese.jpg',
                'description' =>   'frittura giapponese leggera e croccante.',
                'is_public' => true,
            ],
            [
                'name' =>   'Tofu',
                'price' => '5.50',
                'image' =>    'https://www.watabi.it/blog/wp-content/uploads/2020/06/tofu-giapponese.jpg',
                'description' =>   'latte di soia coagulato.',
                'is_public' => true,
            ],
            [
                'name' =>    'Udon',
                'price' => '8.50',
                'image' =>    'https://www.watabi.it/blog/wp-content/uploads/2020/06/udon.jpg',
                'description' =>   "L'udon è una varietà di pasta preparata con farina di grano tenero.",
                'is_public' => true,
            ],
            [
                'name' =>   'Ramen',
                'price' => '9.50',
                'image' =>  'https://www.watabi.it/blog/wp-content/uploads/2020/06/ramen.jpg',
                'description' =>   "brodo salato, condimenti previsti sono soia, miso e fette di carne.",
                'is_public' => true,
            ],
        ];


        // ASSEGNO RISTORANTI
        $sushiRestaurants = ['2', '11', '20']; {
            foreach ($sushiRestaurants as $sushiRestaurant)
                foreach ($asiaTypes as $food) {
                    $new_food = new Food();
                    $new_food->fill($food);
                    $new_food->restaurant_id = $sushiRestaurant;
                    $new_food->save();
                }
        };


        $mcDonalds = [

            [
                'name' =>   'Big Mac',
                'price' => '5.90',
                'image' =>   'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/big-mac-isolated.png?itok=jQEbyoQJ',
                'description' =>   'pane, insalata, hamburger grigliati, cheddar, cetriolo, salsa.',
                'is_public' => true,
            ],
            [
                'name' =>   'McChicken',
                'price' => '5.90',
                'image' =>   'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/mcchicken--hero-isolated.png?itok=_8uEiFFU',
                'description' =>   'pane, cotoletta di pollo fritta, insalata, salsa ranch.',
                'is_public' => true,
            ],
            [
                'name' =>   'Gran Crispy Extra Bacon',
                'price' => '7.20',
                'image' =>   'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/gran-crispy-mcbacon--hero-isolated_3.png?itok=9L7d4LML',
                'description' =>  'pane, hamburger grigliati, cheddar, bacon, salsa.',
                'is_public' => true,
            ],
            [
                'name' =>   'Gran Crispy Chicken Extra Bacon',
                'price' => '7.20',
                'image' =>   'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/gran-crispy-mcbacon-chicken--hero-isolated_2.png?itok=yhd1NsBP',
                'description' =>   'pane, cotolette di pollo fritte, cheddar, bacon, salsa.',
                'is_public' => true,
            ],
            [
                'name' =>   'Crispy McWrap',
                'price' => '6.30',
                'image' =>   'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/crispy-mcwrap-isolated-v2.png?itok=gDosyD-S',
                'description' =>   'piadina, hamburger grigliati, cheddar, insalata, salsa.',
                'is_public' => true,
            ],
            [
                'name' =>   'Crispy Chicken McWrap',
                'price' => '6.30',
                'image' =>   'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/crispy-chicken-wrap-isolated_1.png?itok=Fn_-SOeo',
                'description' =>   'piadina, cotoletta di pollo fritta, cheddar, insalata, salsa.',
                'is_public' => true,
            ],
            [
                'name' =>   'My Selection Chicken Avocado & Bacon',
                'price' => '7.40',
                'image' =>    'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/myselection-chicken-avocado--isolated.png?itok=TzX8qEyY',
                'description' =>   '100% petto di pollo italiano avvolto in una croccante panatura, Caciocavallo Silano DOP, salsa avocado, cavolo cappuccio rosso italiano e bacon.',
                'is_public' => true,
            ],
            [
                'name' =>   'My Selection Speck & Asiago',
                'price' => '7.40',
                'image' =>    'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/myselection-speck-asiago--isolated.png?itok=5MXmVf5d',
                'description' =>   '180 grammi di succosa carne bovina da allevamenti italiani, Asiago DOP, Speck Alto Adige IGP, maionese con senape in grani e zucchine grigliate.',
                'is_public' => true,
            ],
            [
                'name' =>   'My Selection BBQ',
                'price' => '7.40',
                'image' =>    'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/mys-bbq--hero-isolated.png?itok=_X1VHjgk',
                'description' =>   '180G di succosa carne bovina da allevamenti italiani, gouda stagionato, bacon croccante, insalata, coleslaw e salsa BBQ con Aceto Balsamico di Modena IGP.',
                'is_public' => true,
            ],
            [
                'name' =>   'Double Cheeseburger',
                'price' => '3.30',
                'image' =>    'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/double-cheeseburger--isolated.png?itok=wW_zKGFi',
                'description' =>   'due hamburger di carne 100% bovina, formaggio filante, cipolla a cubetti, cetriolo, ketchup e senape.',
                'is_public' => true,
            ],
            [
                'name' =>   'Cheeseburger',
                'price' => '1.90',
                'image' =>    'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/cheeseburger--hero-isolated.png?itok=jf1lAD82',
                'description' =>   'hamburger di carne 100% bovina, formaggio filante, cipolla a cubetti, cetriolo, ketchup e senape',
                'is_public' => true,
            ],
            [
                'name' =>   'Hamburger',
                'price' => '1.50',
                'image' =>    'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/hamburger--hero-isolated.png?itok=oqQTNwnG',
                'description' =>   'Carne 100% bovina da allevamenti italiani, arricchita con cipolla a dadini, cetriolo, ketchup e senape. L’Hamburger, un panino semplice che non passa mai di moda.',
                'is_public' => true,
            ],
            [
                'name' =>   'Double Chicken BBQ',
                'price' => '3.30',
                'image' =>    'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/double-chicken-bbq--hero-isolated.png?itok=3jOktTSA',
                'description' =>   'Due croccanti fette di pollo impanato fanno da base per il formaggio filante, per la lattuga fresca e per la salsa barbecue.',
                'is_public' => true,
            ],
            [
                'name' =>    'Chickenburger',
                'price' => '1.90',
                'image' =>    'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/chickenburger--hero-isolated_0.png?itok=mYR92dgH',
                'description' =>   " pollo italiano impanato e gustosa salsa Caesar tra due morbide fette di pane.",
                'is_public' => true,
            ],
            [
                'name' =>   'Filet-O-Fish',
                'price' => '3.50',
                'image' =>  'https://www.mcdonalds.it/sites/default/files/styles/product_isolated_preview/public/products/filet-o-fish--hero-isolated.png?itok=8dTIpi0a',
                'description' =>   "merluzzo impanato, formaggio, salsa tartara.",
                'is_public' => true,
            ],
        ];
        // ASSEGNO RISTORANTI
        foreach ($mcDonalds as $food) {
            $new_food = new Food();
            $new_food->fill($food);
            $new_food->restaurant_id = '4';
            $new_food->save();
        }


        $burgerKing = [

            [
                'name' =>   'Bacon King 3.0',
                'price' => '7.90',
                'image' =>   'https://www.burgerking.it/site/assets/files/8495654/bacon_king_3_0-1.png',
                'description' =>   ' 3 strati di carne alla griglia, 3 strati di formaggio e 8 fette di delizioso bacon.',
                'is_public' => true,
            ],
            [
                'name' =>   'Big King',
                'price' => '5.90',
                'image' =>   'https://www.burgerking.it/site/assets/files/1856/big_king_nueva.png',
                'description' => 'pane, insalata, hamburger grigliati, cheddar, cetriolo, salsa.',
                'is_public' => true,
            ],
            [
                'name' =>   'Triple Whopper',
                'price' => '7.20',
                'image' =>   'https://www.burgerking.it/site/assets/files/1688/triple_whopper.png',
                'description' =>  ' Pomodoro, cipolla, cetrioli e lattuga con il nostro hamburger più famoso, moltiplicati per tre.',
                'is_public' => true,
            ],
            [
                'name' =>   'Double Cheeseburger',
                'price' => '3.30',
                'image' =>    'https://www.burgerking.it/site/assets/files/96543/double_cheeseburger.png',
                'description' =>   'due hamburger di carne 100% bovina, formaggio filante, cipolla a cubetti, cetriolo, ketchup e senape.',
                'is_public' => true,
            ],
            [
                'name' =>   'Cheeseburger',
                'price' => '1.90',
                'image' =>    'https://www.burgerking.it/site/assets/files/1758/cheeseburger.png',
                'description' =>   'hamburger di carne 100% bovina, formaggio filante, cipolla a cubetti, cetriolo, ketchup e senape',
                'is_public' => true,
            ],
            [
                'name' =>   'Hamburger',
                'price' => '1.50',
                'image' =>    'https://www.burgerking.it/site/assets/files/8455132/hamburger.png',
                'description' =>   'Carne 100% bovina da allevamenti italiani, arricchita con cipolla a dadini, cetriolo, ketchup e senape. L’Hamburger, un panino semplice che non passa mai di moda.',
                'is_public' => true,
            ],
            [
                'name' =>   'Double Cheese Bacon BBQ',
                'price' => '3.30',
                'image' =>    'https://www.burgerking.it/site/assets/files/1786/double_cheesebacon.png',
                'description' =>   'Doppio hamburger, formaggio cheddar e bacon.',
                'is_public' => true,
            ],
        ];
        // ASSEGNO RISTORANTI
        foreach ($burgerKing as $food) {
            $new_food = new Food();
            $new_food->fill($food);
            $new_food->restaurant_id = '22';
            $new_food->save();
        }



        $kfc = [

            [
                'name' =>   'Double Colonel’s Burger',
                'price' => '7.90',
                'image' =>   'https://media.kfc.it/app/uploads/public/642/ff0/fe4/thumb_483_500_500_0_0_crop.png',
                'description' =>   'Il Double Colonel’s Burger ha due filetti di pollo preparati con la ricetta segreta Original: così buono buono il doppio doppio.',
                'is_public' => true,
            ],
            [
                'name' =>   'Zinger',
                'price' => '5.90',
                'image' =>   'https://media.kfc.it/app/uploads/public/5ec/fe9/356/thumb_292_500_500_0_0_crop.jpg',
                'description' => 'Only the brave! Delizioso filetto di pollo con panatura Hot & Spicy, lattuga, cheddar cheese e doppio strato di maionese, in un morbido panino al sesamo.',
                'is_public' => true,
            ],
            [
                'name' =>   'COB Original Recipe',
                'price' => '3.50',
                'image' =>   'https://media.kfc.it/app/uploads/public/5ec/fc1/e45/thumb_278_800_800_0_0_crop.jpg',
                'description' =>  'pezzi di pollo con osso ',
                'is_public' => true,
            ],
            [
                'name' =>   'Tender Original Recipe',
                'price' => '3.70',
                'image' =>    'https://media.kfc.it/app/uploads/public/5ec/fc5/c08/thumb_280_800_800_0_0_crop.jpg',
                'description' =>   'Teneri filetti preparati seguendo la ricetta originale del Colonnello Sanders.',
                'is_public' => true,
            ],
            [
                'name' =>   'Hot Wings',
                'price' => '4.90',
                'image' =>    'https://media.kfc.it/app/uploads/public/5f6/235/0a0/thumb_367_800_800_0_0_crop.jpg',
                'description' =>   'Le mitiche alette piccanti di KFC! ',
                'is_public' => true,
            ],
            [
                'name' =>   'Mix Box',
                'price' => '8.50',
                'image' =>    'https://media.kfc.it/app/uploads/public/5ec/fd0/07a/thumb_286_800_800_0_0_crop.jpg',
                'description' =>   'Il giusto mix per gustare tutte le nostre specialità di pollo!',
                'is_public' => true,
            ]
        ];
        // ASSEGNO RISTORANTI
        foreach ($kfc as $food) {
            $new_food = new Food();
            $new_food->fill($food);
            $new_food->restaurant_id = '13';
            $new_food->save();
        }


        $mexicanTypes = [

            [
                'name' =>   'Burrito (Pollo)',
                'price' => '6.50',
                'image' =>   'https://www.archanaskitchen.com/images/archanaskitchen/0-Archanas-Kitchen-Recipes/2018/May-17/Mexican_Chicken_and_Bean_Burrito_Recipe-4.jpg',
                'description' =>   'Burrito con pollo.',
                'is_public' => true,
            ],
            [
                'name' =>   'Burrito (Manzo)',
                'price' => '7.50',
                'image' =>   'https://betterbegrilled.com/wp-content/uploads/2020/08/Habanero-Skirt-Steak-Burritos-01_wide_1920-1.jpg',
                'description' => 'Burrito con manzo',
                'is_public' => true,
            ],
            [
                'name' =>   'Tacos',
                'price' => '5.50',
                'image' =>   'https://www.donnamoderna.com/content/uploads/2021/05/tacos-carne-e-formaggio.jpg',
                'description' =>  '3 tacos croccanti ripieni',
                'is_public' => true,
            ],
            [
                'name' =>   'Insalata (Pollo)',
                'price' => '6.50',
                'image' =>    'https://ameessavorydish.com/wp-content/uploads/2022/08/Mexican-chicken-salad-feature-.jpg',
                'description' =>   'insalata con filetti di pollo.',
                'is_public' => true,
            ],
            [
                'name' =>   'Insalata (Manzo)',
                'price' => '7.50',
                'image' =>    'https://fitfoodiefinds.com/wp-content/uploads/2021/04/steak-salad-5-1365x2048-1.jpg',
                'description' =>   'Insalatata con carne di manzo.',
                'is_public' => true,
            ],
            [
                'name' =>   'Tamales',
                'price' => '8.50',
                'image' =>    'https://cdn.ilclubdellericette.it/wp-content/uploads/2021/07/tamales-la-ricetta-originale-1280x720.jpg',
                'description' =>   ' un impasto di mais cotto a vapore all’interno di foglie di banana.',
                'is_public' => true,
            ]
        ];
        // ASSEGNO RISTORANTI
        $mexicanRestaurants = ['3', '12', '21']; {
            foreach ($mexicanRestaurants as $mexRestaurant)
                foreach ($mexicanTypes as $food) {
                    $new_food = new Food();
                    $new_food->fill($food);
                    $new_food->restaurant_id = $mexRestaurant;
                    $new_food->save();
                }
        };
    }
}
