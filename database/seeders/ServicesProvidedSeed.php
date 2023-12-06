<?php

namespace Database\Seeders;

use App\Models\ServicesProvided;
use Illuminate\Database\Seeder;

class ServicesProvidedSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServicesProvided::factory(10)->create();
    }
}
