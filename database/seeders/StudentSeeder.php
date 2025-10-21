<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = Classes::factory()->count(10)->create();
        $guardians = Guardian::factory()->count(200)->create();

        for ($i = 0; $i < 500; $i++) {
            $student = Student::factory()->create(['class_id' => $classes->random()->id]);
            $student->guardians()->attach($guardians->random(rand(1, 2))->pluck('id')->toArray());
        }
    }
}
