<!-- <script src="{{asset('js/modal.js') }}"></script> -->

<nav class=" bg-green-800/10 text-black px-6 py-4 flex items-center justify-between">
    <!-- Logo / Brand -->
    <div class="text-xl font-bold">
        <a href="{{ route('home') }}" class="text-green-500">
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
            <a href="{{route('about')}}" class="hover:text-orange-400">
                About
            </a>
        </li>
    </ul>

    <!-- Right side button -->
    <div>
        <a onclick="openModal()" class="bg-orange-500 text-white font-semibold cursor-pointer px-4 py-2 rounded hover:bg-orange-600">
            Add Todo
        </a>
    </div>
</nav>