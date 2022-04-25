<?php

namespace Database\Seeders;

use App\Models\SolicitorList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolicitorListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SolicitorList::factory(50)->create();
    }
}
