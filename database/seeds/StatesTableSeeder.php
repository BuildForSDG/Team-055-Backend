<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('states')->delete();

        $states = [
            [
                'name' => 'Abia',
                'hc_key' => 'ng-ab',
                'longitude' => '7.486002487',
                'latitude' => '5.532003041'
            ],
            [
                'name' => 'Adamawa',
                'hc_key' => 'ng-ad',
                'longitude' => '13.2700321',
                'latitude' => '10.2703408'
            ],
            [
                'name' => 'Akwa Ibom',
                'hc_key' => 'ng-ak',
                'longitude' => '7.849998524',
                'latitude' => '5.007996056'
            ],
            [
                'name' => 'Anambra',
                'hc_key' => 'ng-an',
                'longitude' => '7.06999711',
                'latitude' => '6.210433572'
            ],
            [
                'name' => 'Bauchi',
                'hc_key' => 'ng-ba',
                'longitude' => '10.19001339',
                'latitude' => '11.68040977'
            ],
            [
                'name' => 'Bayelsa',
                'hc_key' => 'ng-by',
                'longitude' => '10.19001339',
                'latitude' => '11.68040977'
            ],
            [
                'name' => 'Benue',
                'hc_key' => 'ng-be',
                'longitude' => '8.129984089',
                'latitude' => '7.190399596'
            ],
            [
                'name' => 'Borno',
                'hc_key' => 'ng-bo',
                'longitude' => '12.18999467',
                'latitude' => '10.62042279'
            ],
            [
                'name' => 'Cross River',
                'hc_key' => 'ng-cr',
                'longitude' => '8.330023558',
                'latitude' => '4.960406513'
            ],
            [
                'name' => 'Delta',
                'hc_key' => 'ng-de',
                'longitude' => '5.680004434',
                'latitude' => '5.890427265'
            ],
            [
                'name' => 'Ebonyi',
                'hc_key' => 'ng-eb',
                'longitude' => '8.0833',
                'latitude' => '6.2500'
            ],
            [
                'name' => 'Enugu',
                'hc_key' => 'ng-en',
                'longitude' => '7.383362995',
                'latitude' => '6.867034321'
            ],
            [
                'name' => 'Edo',
                'hc_key' => 'ng-ed',
                'longitude' => '5.620008096',
                'latitude' => '6.340477314'
            ],
            [
                'name' => 'Ekiti',
                'hc_key' => 'ng-ek',
                'longitude' => '5.219980834',
                'latitude' => '7.630372741'
            ],
            [
                'name' => 'Gombe',
                'hc_key' => 'ng-go',
                'longitude' => '11.16995357',
                'latitude' => '10.29044293'
            ],
            [
                'name' => 'Imo',
                'hc_key' => 'ng-im',
                'longitude' => '7.026003588',
                'latitude' => '5.492997053'
            ],
            [
                'name' => 'Jigawa',
                'hc_key' => 'ng-ji',
                'longitude' => '9.350334607',
                'latitude' => '11.7991891'
            ],
            [
                'name' => 'Kaduna',
                'hc_key' => 'ng-kd',
                'longitude' => '7.710009724',
                'latitude' => '11.0799813'
            ],
            [
                'name' => 'Kano',
                'hc_key' => 'ng-kn',
                'longitude' => '8.5200378',
                'latitude' => '11.99997683'
            ],
            [
                'name' => 'Katsina',
                'hc_key' => 'ng-kt',
                'longitude' => '7.320007689',
                'latitude' => '11.5203937'
            ],
            [
                'name' => 'Kebbi',
                'hc_key' => 'ng-ke',
                'longitude' => '4.199939737',
                'latitude' => '12.45041445'
            ],
            [
                'name' => 'Kogi',
                'hc_key' => 'ng-ko',
                'longitude' => '6.739939737',
                'latitude' => '7.800388203'
            ],
            [
                'name' => 'Kwara',
                'hc_key' => 'ng-kw',
                'longitude' => '8.490010192',
                'latitude' => '4.549995889'
            ],
            [
                'name' => 'Lagos',
                'hc_key' => 'ng-la',
                'longitude' => '3.391531071',
                'latitude' => '6.443261653'
            ],
            [
                'name' => 'Niger',
                'hc_key' => 'ng-ni',
                'longitude' => '5.469939737',
                'latitude' => '10.4003587'
            ],
            [
                'name' => 'Nasarawa',
                'hc_key' => 'ng-na',
                'longitude' => '8.5200378',
                'latitude' => '8.490423603'
            ],
            [
                'name' => 'Ogun',
                'hc_key' => 'ng-og',
                'longitude' => '3.350017455',
                'latitude' => '7.160427265'
            ],
            [
                'name' => 'Ondo',
                'hc_key' => 'ng-on',
                'longitude' => '5.199982054',
                'latitude' => '7.250395934'
            ],
            [
                'name' => 'Osun',
                'hc_key' => 'ng-os',
                'longitude' => '4.179992634',
                'latitude' => '7.629959329'
            ],
            [
                'name' => 'Oyo',
                'hc_key' => 'ng-oy',
                'longitude' => '3.590002806',
                'latitude' => '7.970016092'
            ],
            [
                'name' => 'Plateau',
                'hc_key' => 'ng-pl',
                'longitude' => '8.890041055',
                'latitude' => '9.929973978'
            ],
            [
                'name' => 'Rivers',
                'hc_key' => 'ng-ri',
                'longitude' => '7.010000772',
                'latitude' => '4.810002257'
            ],
            [
                'name' => 'Sokoto',
                'hc_key' => 'ng-so',
                'longitude' => '5.240031289',
                'latitude' => '13.06001548'
            ],
            [
                'name' => 'Taraba',
                'hc_key' => 'ng-ta',
                'longitude' => '9.780012572',
                'latitude' => '7.870409769'
            ],
            [
                'name' => 'Yobe',
                'hc_key' => 'ng-yo',
                'longitude' => '11.96600457',
                'latitude' => '11.74899608'
            ],
            [
                'name' => 'Zamfara',
                'hc_key' => 'ng-za',
                'longitude' => '6.659996296',
                'latitude' => '12.1704057'
            ],
            [
                'name' => 'Federal Capital Territory',
                'hc_key' => 'ng-fc',
                'longitude' => '7.533328002',
                'latitude' => '9.083333149'
            ],
        ];

        foreach ($states as $state) {
            $store_state = new \App\Models\State();
            $store_state->name = $state['name'];
            $store_state->save();
        }
    }
}
