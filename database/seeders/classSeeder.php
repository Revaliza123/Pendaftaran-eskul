<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\classroom;
use Illuminate\Support\Facades\Schema;

class classSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        schema::disableForeignKeyConstraints();
        classroom::truncate();
        schema::disableForeignKeyConstraints();
        classroom::insert([

            
            'kelas'=> 'A1'
        ]);
    }
}
