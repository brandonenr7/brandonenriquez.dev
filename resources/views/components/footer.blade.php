<footer
    {{ $attributes->merge(['class' => 'bg-gray-800 dark:bg-gray-950 font-light mt-8']) }}
>
    <div
        class="mx-auto flex max-w-3xl flex-col items-center justify-between space-y-4 px-4 py-6 sm:flex-row sm:space-y-0 md:px-0"
    >
        <div class="text-xs uppercase tracking-wider text-gray-300">
            &copy; {{ date('Y') }} {{ config('app.name') }}. All Rights
            Reserved.
        </div>
        <ul class="flex space-x-4">
            <li>
                <a
                    href="https://twitter.com/brandonenr7"
                    target="_blank"
                    class="text-gray-400 hover:text-gray-300 dark:text-gray-300 dark:hover:text-indigo-500"
                >
                    <x-icon-x-twitter class="h-6 w-6 fill-current" />
                    <span class="sr-only">Twitter</span>
                </a>
            </li>
            <li>
                <a
                    href="https://github.com/brandonenr7"
                    target="_blank"
                    class="text-gray-400 hover:text-gray-300 dark:text-gray-300 dark:hover:text-indigo-500"
                >
                    <x-icon-github class="h-6 w-6 fill-current" />
                    <span class="sr-only">GitHub</span>
                </a>
            </li>
        </ul>
    </div>
</footer>
