<?php

use Illuminate\Database\Seeder;

class eventsTableSeeder extends Seeder
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

        $limit = 30;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('events')->insert([ //,
                'title' => $faker->name,
                'location' => $faker->address,
                'image' => '1524898001_.jpg',
                'details'=>$faker->text(200),
                'starting_date'=>$faker->date(),
                'ending_date'=>$faker->date()
            ]);
        }
    }
}
