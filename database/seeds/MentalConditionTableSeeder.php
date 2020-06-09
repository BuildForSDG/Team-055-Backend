<?php

use Illuminate\Database\Seeder;

class MentalConditionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('mental_conditions')->delete();
        $conditions = [
            [
                'mental_condition' => $ilness = 'Anxiety Disorders',
                'slug' => \Illuminate\Support\Str::slug($ilness)
            ],
            [
                'mental_condition' => $ilness = 'ADHD',
                'slug' => \Illuminate\Support\Str::slug($ilness)
            ],
            [
                'mental_condition' => $ilness = 'Bipolar Disorder',
                'slug' => \Illuminate\Support\Str::slug($ilness)
            ],
            [
                'mental_condition' => $ilness = 'Borderline Personality Disorder',
                'slug' => \Illuminate\Support\Str::slug($ilness)
            ],
            [
                'mental_condition' => $ilness = 'Depression',
                'slug' => \Illuminate\Support\Str::slug($ilness)
            ],
            [
                'mental_condition' => $ilness = 'Seasonal Pattern Depression',
                'slug' => \Illuminate\Support\Str::slug($ilness)
            ],
            [
                'mental_condition' => $ilness = 'Postpartum Depression',
                'slug' => \Illuminate\Support\Str::slug($ilness)
            ],
            [
                'mental_condition' => $ilness = 'Dissociative Disorders',
                'slug' => \Illuminate\Support\Str::slug($ilness)
            ],
            [
                'mental_condition' => $ilness = 'Eating Disorders',
                'slug' => \Illuminate\Support\Str::slug($ilness)
            ],
            [
                'mental_condition' => $ilness = 'Obsessive-compulsive disorder',
                'slug' => \Illuminate\Support\Str::slug($ilness)
            ],
            [
                'mental_condition' => $ilness = 'Posttraumatic Stress Disorder',
                'slug' => \Illuminate\Support\Str::slug($ilness)
            ],
            [
                'mental_condition' => $ilness = 'Schioaffective Disorder',
                'slug' => \Illuminate\Support\Str::slug($ilness)
            ],
            [
                'mental_condition' => $ilness = 'Schizophrenia',
                'slug' => \Illuminate\Support\Str::slug($ilness)
            ]
        ];

        foreach ($conditions as $condition) {
            \App\Models\MentalCondition::create($condition);
        }
    }
}
