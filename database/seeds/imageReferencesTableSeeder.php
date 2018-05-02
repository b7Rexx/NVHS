<?php

use Illuminate\Database\Seeder;

class imageReferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

        $limit = 50;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('images_references')->insert([ //,
                'image_id' => $faker->randomNumber(1),
                'image_name' => $faker->randomNumber(1)
            ]);
        }
    }
}
