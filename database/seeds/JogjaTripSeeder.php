<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class JogjaTripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();
        for($i=0;$i<100;$i++){
            DB::table('jogjatrip')->insert([
                'destinasi' => $faker->word(2),
                'htm' => $faker->word(),
                'alamat' =>$faker->word(),
                'gambar' => $faker->url()
            ]);
        }
        
    }
}
