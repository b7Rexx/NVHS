<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(eventsTableSeeder::class);
        $this->call(videosTableSeeder::class);
        $this->call(imageReferencesTableSeeder::class);
    }
}
