<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 500 ; $i++) { 
            
            $teacher = new Teacher;

            $teacher->name= $faker->firstName();
            $teacher->surname= $faker->lastName();
            $teacher->phone= $faker->phoneNumber();
            $teacher->email= $faker->email();
            $teacher->office_address= $faker->streetAddress();
            $teacher->office_number = $faker->numberBetween(0, 700);

            $teacher->save();

        }
    }
}
