<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
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
        \App\Models\User::factory(5)->create();    

        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Lavarel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Cape Town, CT',
        //     'email' => 'member@vsothsystem.com',
        //     'website' => 'https://www.vsothsystem.com',
        //     'description' => 'nous sommes la pour la description, ceci est un test pour voir 
        //     si la description function normalement, comme prevu sur le reseignement de la 
        //     descripiton du projets'
        // ]);

        // Listing::create([
        //     'title' => 'Full-stack developer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'manager@vsothsystem.com',
        //     'website' => 'https://www.vsothsystem.com',
        //     'description' => 'description numero 2, voila lol. nous sommes la pour la 
        //     description, ceci est un test pour voir si la description function normalement, 
        //     comme prevu sur le reseignement de la descripiton du projets'
        // ]);

    }
}