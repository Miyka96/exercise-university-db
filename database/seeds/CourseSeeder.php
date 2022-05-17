<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Course;
use App\Models\Degree;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $degree= Degree::all();
        $degreeId= $degree->pluck('id')->all();
        for ($i=0; $i < 500; $i++) { 

            $course = new Course;          
            $course->degree_id = $faker->optional()->randomElement($degreeId);
        }
    }
}
