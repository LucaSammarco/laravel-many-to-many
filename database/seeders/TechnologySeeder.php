<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use App\Models\Project;
use Faker\Generator as Faker;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        $technologiesName = [
            "JavaScript",
            "PHP",
            "Python",
            "Ruby",
            "Java",
            "C#",
            "HTML",
            "CSS",
            "TypeScript",
            "SQL",
        ];

        foreach ($technologiesName as $techName) {
            $technology = new Technology();
            $technology->name = $techName;
            $technology->color = $faker->unique()->safeHexColor;
            $technology->save();
        }
    }
}