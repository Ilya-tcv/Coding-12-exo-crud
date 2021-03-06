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
        $this->call(AboutSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(TestimonialSeeder::class);
    }
}
