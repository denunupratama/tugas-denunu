<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ClassRoom; // Import the ClassRoom model
use Carbon\Carbon; // Import Carbon for timestamps

class ClassroomSeeder extends Seeder
{
    /**
     * 
     * Run the database seeds.
     */
    public function run(): void
    {
        //1. Eloquent ORM (recommended)
        ClassRoom::insert([
            'name' => '12 rpl c',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //2. Query Builder
        DB::table('class')->insert([
            'name' => '12 rpl c',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $data=[
            [
                'name'=>'12 rpl a'
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name'=>'12 rpl b'
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ];
        //3. Raw query (if needed, you can uncomment and use raw queries here)
        // DB::statement('INSERT INTO class (name, created_at, updated_at) VALUES ("12 rpl c", "' . Carbon::now() . '", "' . Carbon::now() . '")');
    }
}
