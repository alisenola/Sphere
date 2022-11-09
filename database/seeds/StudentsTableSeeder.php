<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::firstOrCreate([
            'name' => 'Student1',
            'class_id' => 1
        ]);
    }
}
