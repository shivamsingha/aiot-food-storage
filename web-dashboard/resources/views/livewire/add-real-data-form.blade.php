<x-jet-form-section submit="save">
    <x-slot name="title">
        {{ __('Update with Real Data') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Add real observations to recorded sensor data to retrain ML model and get better results in future.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="fruitId" value="{{ __('Food Item') }}" />
            <select
                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                id="fruitId" wire:change="$emitSelf('fruitSelected', $event.target.value)" wire:model="fruitId"
            >
                <option value="" disabled selected>{{ __('Select the food item') }}</option>
                @foreach ($sensor_data as $index => $sensor_data)
                    <option value="{{ $sensor_data->id }}">{{ $sensor_data->entry_name }}</option>
                @endforeach
            </select>
            <x-jet-input-error for="fruitId" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="temp" value="{{ __('Temperature (℃)') }}" />
            <x-jet-input id="temp" type="number" class="mt-1 block w-full bg-gray-100" value="{{ $temp }}" disabled />
            <x-jet-input-error for="temp" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="humidity" value="{{ __('Humidity') }}" />
            <x-jet-input id="humidity" type="number" class="mt-1 block w-full bg-gray-100" value="{{ $humidity }}"
                disabled />
            <x-jet-input-error for="humidity" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="co2" value="{{ __('CO₂ (ppm)') }}" />
            <x-jet-input id="co2" type="number" class="mt-1 block w-full bg-gray-100" value="{{ $co2 }}" disabled />
            <x-jet-input-error for="co2" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="spoiled_in_days" value="{{ __('Number of days to spoil') }}" />
            <x-jet-input id="spoiled_in_days" type="number" class="mt-1 block w-full" value="{{ $spoiled_in_days }}"
                wire:model="spoiled_in_days" />
            <x-jet-input-error for="spoiled_in_days" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>