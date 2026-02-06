<nav class="bg-gray-900 text-white px-6 py-4 flex items-center justify-between">
    <!-- Logo / Brand -->
    <div class="text-xl font-bold">
        <a href="{{ route('home') }}" class="text-orange-400">
            TodoApp
        </a>
    </div>

    <!-- Links -->
    <ul class="flex items-center gap-6">
        <li>
            <a href="{{ route('home') }}" class="hover:text-orange-400">
                Home
            </a>
        </li>

        <li>
            <a href="{{ route('home') }}" class="hover:text-orange-400">
                Todos
            </a>
        </li>

        <li>
            <a href="#" class="hover:text-orange-400">
                About
            </a>
        </li>
    </ul>

    <!-- Right side button -->
    <div>
        <a href="#" class="bg-orange-500 px-4 py-2 rounded hover:bg-orange-600">
            Add Todo
        </a>
    </div>
</nav>