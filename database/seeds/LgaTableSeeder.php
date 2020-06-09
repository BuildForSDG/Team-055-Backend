<?php

use Illuminate\Database\Seeder;

class LgaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('lgas')->delete();
        $lagos_state = \App\Models\State::where('name', 'Lagos')->first();
        $lgas = [
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Alimosho',
                'reference' => uniqid('lgas_'),
                'longitude' => '3.296',
                'latitude' => '6.611'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Ajeromi-Ifelodun',
                'reference' => uniqid('lgas_'),
                'latitude' => '6.455478',
                'longitude' => '3.333855'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Kosofe',
                'reference' => uniqid('lgas_'),
                'longitude' => '3.417977',
                'latitude' => '6.441158'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Mushin',
                'reference' => uniqid('lgas_'),
                'latitude' => '6.5333',
                'longitude' => '3.3500'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Oshodi-Isolo',
                'reference' => uniqid('lgas_'),
                'latitude' => '6.5355',
                'longitude' => '3.3087'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Ojo',
                'reference' => uniqid('lgas_'),
                'latitude' => '6.4667',
                'longitude' => '3.1833'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Ikorodu',
                'reference' => uniqid('lgas_'),
                'latitude' => '6.616865',
                'longitude' => '3.508072'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Surulere',
                'reference' => uniqid('lgas_'),
                'latitude' => '6.500000',
                'longitude' => '3.350000'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Agege',
                'reference' => uniqid('lgas_'),
                'latitude' => '6.6180',
                'longitude' => '3.3209'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Ifako-Ijaiye',
                'reference' => uniqid('lgas_'),
                'longitude' => '3.2885',
                'latitude' => '6.6850'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Somolu',
                'reference' => uniqid('lgas_'),
                'latitude' => '6.540',
                'longitude' => '3.372'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Amuwo-Odofin',
                'reference' => uniqid('lgas_'),
                'latitude' => '6.429302',
                'longitude' => '3.268421'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Lagos Mainland',
                'reference' => uniqid('lgas_'),
                'longitude' => '3.384247',
                'latitude' => '6.508370'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Ikeja',
                'reference' => uniqid('lgas_'),
                'latitude' => '6.6018',
                'longitude' => '3.3515'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Eti-Osa',
                'reference' => uniqid('lgas_'),
                'latitude' => '6.4590',
                'longitude' => '3.6015'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Badagry',
                'reference' => uniqid('lgas_'),
                'latitude' => '6.4150',
                'longitude' => '2.8813'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Apapa',
                'reference' => uniqid('lgas_'),
                'latitude' => '6.4500',
                'longitude' => '3.3667'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Lagos Island',
                'reference' => uniqid('lgas_'),
                'latitude' => '6.4549',
                'longitude' => '3.4246'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Epe',
                'reference' => uniqid('lgas_'),
                'latitude' => '6.5833',
                'longitude' => '3.9833'
            ],
            [
                'state_id' => $lagos_state->id,
                'local_government' => 'Ibeju-Lekki',
                'reference' => uniqid('lgas_'),
                'latitude' => '6.5001',
                'longitude' => '3.8045'
            ]
        ];

        foreach ($lgas as $lga) {
            $store_lga = new \App\Models\Lga();
            $store_lga->state_id = $lga['state_id'];
            $store_lga->name = $lga['local_government'];
            $store_lga->save();
        }
    }
}
