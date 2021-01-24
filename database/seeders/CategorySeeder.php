<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaulCateogries = [
            [
                "en" => ["title" => "Appartment"],
                "ru" => ["title" => "Квартира"],
                "am" => ["title" => "Բնակարան"],
                "order" => 1
            ],
            [
                "en" => ["title" => "Commercial Property"],
                "ru" => ["title" => "Ком. недвижимость"],
                "am" => ["title" => "Կոմերցիոն տարածք"],
                "order" => 2
            ],
            [
                "en" => ["title" => "Land"],
                "ru" => ["title" => "Земля"],
                "am" => ["title" => "Հողատարածք"],
                "order" => 3
            ],
            [
                "en" => ["title" => "House"],
                "ru" => ["title" => "Дом"],
                "am" => ["title" => "Առանձնատուն"],
                "order" => 4
            ],
        ];
        foreach ($defaulCateogries as $cateogry) {
            Category::create($cateogry);
        }
    }
}
