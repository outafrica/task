{{-- definition for tasks view --}}
<div>
    <table class="table min-w-full mt-4">
        <thead>
            <tr>
                <th class="px-6 py-3 border-b2 border-gray-300 text-left text-sm leading-4 tracking-wide">Name</th>
                <th class="px-6 py-3 border-b2 border-gray-300 text-left text-sm leading-4 tracking-wide">Actions</th>
            </tr>
        </thead>
        <tbody wire:sortable="updateOrder">
            {{-- loop thorugh each task  --}}
            @forelse ($tasks as $task)
                <tr wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}">
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                        {{ $task->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                        <button wire:click="$emit('openModal', 'edit-task', {{ json_encode(['task' => $task]) }})"
                            class="inline-flex items-center px-4 py-2 bg-gray-500 border rounded border-transparent">
                            Edit
                        </button>
                        <button wire:click="$emit('openModal', 'delete-task', {{ json_encode(['task' => $task]) }})"
                            class="inline-flex items-center px-4 py-2 bg-red-800 border rounded border-transparent">
                            Delete
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    {{-- show no tasks when there's no tasks --}}
                    <td colspan="2">
                        No Tasks
                    </td>
                </tr>
            @endforelse

        </tbody>
    </table>
</div>
