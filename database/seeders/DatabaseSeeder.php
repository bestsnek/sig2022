<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Polygon;
use App\models\Polyline;
use App\models\Point;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Polygon::insert([

            "nama" => 'fmipa',
            "keterangan" => 'Bangunan Fmipa',
            "coordinate1" => '-0.0566841854970367, 109.34402549891307',
            "coordinate2" => '-0.05631940525545943, 109.3442990842209',
            "coordinate3" => '-0.05781607711425214, 109.34610152860193',
            "coordinate4" => '-0.05823986591301429, 109.34546316288366',
        ]);
        Polyline::insert([

            "nama" => 'fmipa',
            "keterangan" => 'Jalan Ke FMIPA',
            "coordinate1" => '-0.055756141639879436, 109.34921289102925',
            "coordinate2" => '-0.05865292587555826, 109.34719586993619',
            "coordinate3" => '-0.05688803328044015, 109.34533441688693',
            "coordinate4" => '-0.05728500000988387, 109.34487844137388',
        ]);
        Point::insert([

            "nama" => 'Gedung lama fmipa',
            "keterangan" => 'Gedung Lama Fmipa',
            "coordinate1" => '-0.05793945866939562, 109.34552217148071', 
        ]);


    }
}
