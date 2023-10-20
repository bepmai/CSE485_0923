<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB; 
use App\Models\Artwork;
use Faker\Factory as Faker;


class ArtworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artworks')->delete();
        
        $faker = Faker::create();
        
        for($i=0; $i<4; $i++){
            Artwork::create([
                'artist_name' => $faker->name, 
                'description' => $faker->paragraph,
                'art_type' => $faker->randomElement(['hoi hoa', 'am nhac', 'van hoc']),
                'media_link' => $faker->unique()->url,
                'cover_img' => $faker->imageUrl(200),
            ]);
        }
    }
}