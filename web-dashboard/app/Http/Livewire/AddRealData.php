<?php

namespace App\Http\Livewire;

use App\Models\SensorData;
use Livewire\Component;

class AddRealData extends Component
{
    public $sensor_data;
    public $fruitId;
    public $temp;
    public $humidity;
    public $co2;
    public $spoiled_in_days;

    protected $listeners = ['fruitSelected' => 'fruitSelected'];
    protected $rules = [
        'fruitId' => 'required',
        'spoiled_in_days' => 'required',
    ];

    public function mount()
    {
        $this->sensor_data = SensorData::orderBy('entry_name')->get();
    }

    public function fruitSelected($fruitId)
    {
        foreach ($this->sensor_data as $index => $selected) {
            if ($selected->id == $fruitId) {
                $this->temp = $selected->temp;
                $this->humidity = $selected->humidity;
                $this->co2 = $selected->co2;
                $this->spoiled_in_days = $selected->spoiled_in_days;
                return;
            }
        }
        $this->temp = "";
        $this->humidity = "";
        $this->co2 = "";
        $this->spoiled_in_days = "";
    }

    public function save()
    {
        $validatedData = $this->validate();
        $data_to_update = SensorData::find($validatedData['fruitId']);
        $data_to_update->spoiled_in_days = $validatedData['spoiled_in_days'];
        $data_to_update->save();
    }

    public function render()
    {
        return view('livewire.add-real-data-form');
    }
}
