<div>
    <button
        wire:click="exportPatientAsCsv()"
        class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white mb-4 py-2 px-4 border border-blue-500 hover:border-transparent rounded"
    >
        Export CSV
    </button>
    <livewire:patient-table/>
</div>
