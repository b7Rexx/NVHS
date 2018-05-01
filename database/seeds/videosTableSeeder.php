<?php

use Illuminate\Database\Seeder;

class videosTableSeeder extends Seeder
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
            DB::table('videos')->insert([ //,
                'title' => $faker->name,
                'details'=>$faker->text(200),
                'video_name'=>'9pdj4iJD08s'
            ]);
        }

    }
}
