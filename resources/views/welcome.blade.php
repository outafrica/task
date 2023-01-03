<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sortable Task</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine v3 -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


</head>

<body class="bg-gray-100">
    <div class=" antialiased text-black-100 font-sans">
        <div class="flex flex-col sm:justify-center items-center pt-5 pb-5">
            <div class="w-full sm:max-w-2xl mt-6 mb-6 px-6 py-8 bg-white shadow-md overflow-hidden">
                {{-- create task button --}}
                <button onclick="Livewire.emit('openModal', 'create-task')"
                    class="inline-flex items-center px-4 py-2
                    bg-blue-500 border rounded border-transparent">
                    Create Task
                </button>
                <br>
                {{-- component view for tasks --}}
                @livewire('task')
            </div>
        </div>
    </div>
</body>
@livewireScripts
@livewire('livewire-ui-modal')
<script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>

</html>
