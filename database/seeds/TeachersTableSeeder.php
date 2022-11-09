<?php

use Illuminate\Database\Seeder;
use App\Teacher;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::firstOrCreate([
            'name' => 'Teacher1',
            'class_id' => 1
        ]);
    }
}
