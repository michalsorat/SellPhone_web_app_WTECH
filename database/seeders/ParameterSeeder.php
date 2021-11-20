<?php

namespace Database\Seeders;

use App\Models\Parameter;
use Illuminate\Database\Seeder;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parameters = [
            [
                'screen_size' => '6.2',
                'screen_resolution' => '2400 x 1080 px',
                'screen_type' => 'AMOLED',
                'cpu_cores' => '8',
                'cpu_frequency' => '2.91',
                'ram' => '8',
                'internal_storage' => '128',
                'battery_capacity' => '4000',
                'back_camera_resolution' => '12+64+12 Mpx',
                'front_camera_resolution' => '10 Mpx',
                'max_video_resolution' => '8K Ultra HD',
                'operating_system' => 'Android 11',
                'connector' => 'USB-C',
                'network_connection' => '5G',
                'product_id' => '1'
            ]
        ];

        foreach ($parameters as $parameter) {
            Parameter::create(array(
                'screen_size' => $parameter['screen_size'],
                'screen_resolution' => $parameter['screen_resolution'],
                'screen_type' => $parameter['screen_type'],
                'cpu_cores' => $parameter['cpu_cores'],
                'cpu_frequency' => $parameter['cpu_frequency'],
                'ram' => $parameter['ram'],
                'internal_storage' => $parameter['internal_storage'],
                'battery_capacity' => $parameter['battery_capacity'],
                'back_camera_resolution' => $parameter['back_camera_resolution'],
                'front_camera_resolution' => $parameter['front_camera_resolution'],
                'max_video_resolution' => $parameter['max_video_resolution'],
                'operating_system' => $parameter['operating_system'],
                'connector' => $parameter['connector'],
                'network_connection' => $parameter['network_connection'],
                'product_id' => $parameter['product_id']

            ));
        }
    }
}
