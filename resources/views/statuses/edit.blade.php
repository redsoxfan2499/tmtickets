<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit A Status') }}
        </h2>
    </x-slot>
    <script src="https://unpkg.com/vanilla-picker@2"></script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Edit A Status
                    <div class="float-right">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('statuses.index') }}">Back To Statuses</a>
                    </div>
                </div>
            </div>
            <br/>
            <livewire:status.edit :id="$id" />
        </div>
    </div>
</x-app-layout>
