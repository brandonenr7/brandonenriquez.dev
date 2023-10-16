<nav {{ $attributes }}>
    <ul class="flex items-center gap-2 text-gray-700 dark:text-gray-400">
        <li>
            <a
                href="{{ route('home') }}"
                class="text-indigo-500 hover:text-indigo-600"
            >
                Home
            </a>
        </li>
        {{ $slot }}
    </ul>
</nav>
