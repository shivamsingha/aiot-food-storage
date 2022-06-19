<?php

namespace Database\Seeders;

use App\Models\SensorData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SensorDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sensor_data = new SensorData();

        $sensor_data->entry_name = 'Banana';
        $sensor_data->temp = '23.5';
        $sensor_data->humidity = '45.6';
        $sensor_data->co2 = '401.0';
        $sensor_data->spoiled_in_days = '15';
        
        $sensor_data->save();
    }
}
