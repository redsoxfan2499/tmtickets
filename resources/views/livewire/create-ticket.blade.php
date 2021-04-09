<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" wire:submit.prevent="save">
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
            Title
        </label>
        <input class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
               wire:model="title"
               name="title"
               id="title" type="text">
        @error('title') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
            Category
        </label>
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                wire:model="category"
                name="category"
                id="category">
            <option value="">Choose a Category</option>
            <option value="update_content">Update Content</option>
            <option value="update_link">Update Link</option>
            <option value="landing_page">Create Landing Page</option>
        </select>
        @error('category') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="priority">
            Priority
        </label>
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                wire:model="priority"
                name="priority"
                id="priority">
            <option value="">Choose a Priority</option>
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
            <option value="other">Other</option>
        </select>
        @error('priority') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="impact">
            Impact Level
        </label>
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                wire:model="impact"
                name="impact"
                id="impact">
            <option value="">Choose a Impact Level</option>
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
            <option value="other">Other</option>
        </select>
        @error('impact') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="comment">
            Comment/Message
        </label>
        <textarea class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  wire:model="comment"
                  id="comment" name="comment">
        </textarea>
        @error('comment') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="images">
            Screenshots: jpg, jpeg or png file types only.
        </label>
         <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                wire:model="images"
                name="images[]" id="images[]" multiple type="file">
        @error('images.*') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Save Ticket
        </button>
    </div>
</form>
