{{-- definition for delete modal --}}
<div>
    <form class="rounded px-8 pt-6 pb-8 mb-4" wire:submit="deleteTask">
        <div class="mb-4">

            <span class="text-md text-red-500">Are you sure you want to delete this task?</span>
        </div>
        <div class="flex content-end border-teal-500 py-2">
            <button type="submit"
                class="flex-shrink-0 bg-red-500 hover:bg-red-700 border-red-500 hover:border-red-700 text-sm border-4 text-white py-1 px-2 rounded">
                Delete
            </button>
        </div>
    </form>
</div>
