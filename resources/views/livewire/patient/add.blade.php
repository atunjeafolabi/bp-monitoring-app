<div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4">
    <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Add Patient</h1>
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
            <label class="mb-2 font-bold text-lg text-gray-900" for="full_name">Full Name</label>
            <input wire:model="full_name" class="border py-2 px-3 text-grey-800" type="text" name="full_name" id="full_name">
        </div>
        <div class="flex flex-col mb-4">
            <label class="mb-2 font-bold text-lg text-gray-900" for="date_of_birth">Date of Birth</label>
            <input wire:model="date_of_birth" class="border py-2 px-3 text-grey-800" type="date" name="date_of_birth" id="date_of_birth">
        </div>
        <div class="flex flex-col mb-4">
            <label class="mb-2 font-bold text-lg text-gray-900" for="address">Address</label>
            <textarea wire:model="address" class="border py-2 px-3 text-grey-800" name="address" id="address"></textarea>
        </div>
        <div class="flex flex-col mb-4">
            <label class="mb-2 font-bold text-lg text-gray-900" for="email">Email</label>
            <input wire:model="email" class="border py-2 px-3 text-grey-800" type="email" name="email" id="email">
        </div>
        <div class="flex flex-col mb-4">
            <label class="mb-2 font-bold text-lg text-gray-900" for="phone">Phone</label>
            <input wire:model="phone" class="border py-2 px-3 text-grey-800" type="phone" name="phone" id="phone">
        </div>
        <button
            class="block bg-green-400 hover:bg-green-600 text-white uppercase text-md mx-auto px-5 py-2 rounded"
            type="button"
            wire:click="store()"
        >
            Add
        </button>
    </form>
</div>
