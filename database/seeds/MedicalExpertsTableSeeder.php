<?php

use Illuminate\Database\Seeder;

class MedicalExpertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('medical_experts')->delete();
        $lagos = $this->getState('Lagos');
        $fct = $this->getState('Federal Capital Territory');
        $experts = [
            [
                'title' => 'Mrs',
                'first_name' => 'Hauwa',
                'last_name' => 'Bello',
                'email' => '',
                'phone_number' => '07050344449',
                'address' => 'Abuja',
                'about' => 'A competent and passionate Psychotherapist, I help individuals upscale their mental and 
                            emotional well-being using evidence base practice',
                'state_id' => $fct->id
            ],
            [
                'title' => 'Mrs',
                'first_name' => 'Ibironke',
                'last_name' => 'Thomas',
                'email' => '',
                'phone_number' => '07011150587',
                'address' => 'Lekki, Lagos',
                'about' => 'An experienced client-centered psychiatrist working mainly with adult medication and ...',
                'state_id' => $lagos->id
            ],
            [
                'title' => 'Dr',
                'first_name' => 'Molabo',
                'last_name' => 'Kola-Taiwo',
                'email' => '',
                'phone_number' => '08132612221',
                'address' => 'Wuse, FCT-Abuja',
                'about' => 'A cheerful (happy) heart does good like medicine. Psychologist who loves helping people live 
                            happier, fulfilling lives',
                'state_id' => $fct->id
            ],
            [
                'title' => 'Dr',
                'first_name' => 'Nirvana',
                'last_name' => 'Psychoeducational Services',
                'email' => '',
                'phone_number' => '08094541185',
                'address' => 'Lagos',
                'about' => 'A mental health organisation filled with seasoned, capable therapist/counsellor with ...',
                'state_id' => $lagos->id
            ]
        ];

        foreach ($experts as $expert) {
            \App\Models\MedicalExpert::create($expert);
        }
    }

    private function getState($name)
    {
        return \App\Models\State::where('name', $name)->first();
    }
}
