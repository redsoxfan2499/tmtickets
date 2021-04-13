<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" wire:submit.prevent="createTicket">
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
            Title
        </label>
        <input class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
               wire:model.lazy="title"
               name="title"
               id="title" type="text">
        @error('title') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="category_id">
            Category
        </label>
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                wire:model.lazy="category_id"
                name="category_id"
                id="category_id">
            <option value="">Choose a Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="priority_id">
            Priority
        </label>
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                wire:model.lazy="priority_id"
                name="priority_id"
                id="priority_id">
            <option value="">Choose a Priority</option>
            @foreach($priorities as $priority)
                <option value="{{ $priority->id }}">{{ $priority->name }}</option>
            @endforeach
        </select>
        @error('priority_id') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="impact_id">
            Impact Level
        </label>
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                wire:model.lazy="impact_id"
                name="impact_id"
                id="impact_id">
            <option value="">Choose a Impact Level</option>
            @foreach($impacts as $impact)
                <option value="{{ $impact->id }}">{{ $impact->name }}</option>
            @endforeach
        </select>
        @error('impact_id') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="comment_body">
            Comment/Message
        </label>
        <textarea class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  wire:model.lazy="comment_body"
                  id="comment_body" name="comment_body">
        </textarea>
        @error('comment_body') <span class="error">{{ $message }}</span> @enderror
    </div>

    {{-- <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="images">
            Screenshots: jpg, jpeg or png file types only.
        </label>
         <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                wire:model="images"
                name="images[]" id="images[]" multiple type="file">
        @error('images.*') <span class="error">{{ $message }}</span> @enderror
    </div> --}}

    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Save Ticket
        </button>
    </div>
</form>
