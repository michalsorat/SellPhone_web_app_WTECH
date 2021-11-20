<?php

namespace Database\Seeders;

use App\Models\Specification;
use Illuminate\Database\Seeder;

class SpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specifications = [
            [
                'name' => 'Výkonný procesor',
                'description' => 'Procesor Qualcomm Snapdragon ponúka špičkovú energetickú účinnosť, výkon a 5G konektivitu.
                                  Výkonná čipová sada umožňuje rýchlejšie pripojenie, optimalizované hranie hier a lepšie
                                  spracovanie obrazu za cenu, ktorú nikde inde nenájdete.',
                'image_src' => 'img/processor.jpg',
                'product_id' => '1'
            ],
            [
                'name' => 'Displej',
                'description' => 'Impozantný 6,2 palcový Infinity-O displej Galaxy S21 5G prináša živé detaily aj za jasného
                                  svetla. Eye Comfort Shield2 znižuje vyžarovanie modrého svetla a Real Smooth udržuje hladký
                                  obraz, či už hráte alebo scrollujete.',
                'image_src' => 'img/display.jpg',
                'product_id' => '1'
            ],
            [
                'name' => 'Výdrž',
                'description' => 'Batéria s vysokou kapacitou 4 000 mAh zaisťuje dlhú výdrž. Určite oceníte aj podporu rýchleho
                                  nabíjania, ktorej zásluhou dodáte 100 % energie za iba 59 minút.',
                'image_src' => 'img/battery.png',
                'product_id' => '1'
            ]
        ];

        foreach ($specifications as $specification) {
            Specification::create(array(
                'name' => $specification['name'],
                'description' => $specification['description'],
                'image_src' => $specification['image_src'],
                'product_id' => $specification['product_id']
            ));
        }
    }
}
