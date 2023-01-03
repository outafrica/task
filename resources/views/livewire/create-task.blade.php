{{-- definition for create modal --}}
<div>
    <form class="rounded px-8 pt-6 pb-8 mb-4" wire:submit="createTask">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Create Task
            </label>
            <input type="text"
                class="hadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="name" placeholder="Do Chores" wire:model="name">
            @error('name')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex content-end border-teal-500 py-2">
            <button type="submit"
                class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded">
                Create
            </button>
        </div>
    </form>
</div>
