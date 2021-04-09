<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" wire:submit.prevent="save">
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Name
        </label>
        <input class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
               wire:model="name"
               name="name"
               id="name" type="text">
        @error('name') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Save Impact
        </button>
    </div>
</form>
