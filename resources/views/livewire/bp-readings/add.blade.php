<div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
    <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Blood Pressure Reading</h1>
    <section class="mt-10">
        <h4 class="text-lg font-semibold border-b mb-2">Add New</h4>
        @if (count($errors) > 0)
            <div class="bg-red-200 p-4 rounded mb-2">
                <strong>Sorry!</strong> invalid input.<br><br>
                <ul style="list-style-type:none;" class="text-red">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-semibold text-gray-900" for="full_name">Patient</label>
                <input wire:model="patient_full_name" disabled class="cursor-not-allowed border py-2 px-3 text-grey-800" type="text" name="full_name" id="full_name">
            </div>
            <div class="flex flex-col mb-4">
                <label class="mb-2 font-semibold text-gray-900" for="bp_reading">Value (mmHg)</label>
                <input wire:model="value" class="border py-2 px-3 text-grey-800" type="number" name="bp_reading" id="bp_reading">
            </div>
            <button
                class="block bg-green-400 hover:bg-green-600 text-white uppercase text-md mx-auto px-5 py-2 rounded"
                type="button"
                wire:click="store()"
            >
                Add
            </button>
        </form>
    </section>
    <section class="mt-10">
        <h4 class="text-lg font-semibold border-b mb-3">Previous Readings</h4>
        @if(count($previous_readings) == 0)
            <span>No previous readings available</span>
        @else
            <table>
                <thead>
                <th class="border-collapse border border-blue-200 p-2">Observation Date</th>
                <th class="border-collapse border border-blue-200 p-2">Reading(mmHg)</th>
                </thead>
                <tbody>
                @foreach($previous_readings as $previous_reading)
                    <tr>
                        <td class="border-collapse border border-blue-200 p-2">{{$previous_reading->created_at}}</td>
                        <td class="border-collapse border border-blue-200 p-2">{{$previous_reading->value}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </section>
</div>
