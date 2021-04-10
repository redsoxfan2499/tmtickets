<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create A Category') }}
        </h2>
    </x-slot>
    <script src="https://unpkg.com/vanilla-picker@2"></script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Create A Category
                    <div class="float-right">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('categories.index') }}">Back To Categories</a>
                    </div>
                </div>
            </div>
            <br/>
            <livewire:category.create />
        </div>
    </div>
</x-app-layout>
