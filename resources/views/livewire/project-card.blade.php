<div class="overflow-hidden rounded bg-white shadow-lg dark:bg-gray-800">
    @if ($project->url)
        <a href="{{ $project->url }}" target="_blank">
            <img
                src="{{ $project->image_url }}"
                alt="{{ $project->name }}"
                class="object-contain"
            />
        </a>
    @else
        <img
            src="{{ $project->image_url }}"
            alt="{{ $project->name }}"
            class="object-contain"
        />
    @endif

    <div class="grid grid-cols-2 gap-1 p-4">
        @if ($project->url)
            <h3
                class="col-span-2 text-lg font-medium tracking-wide dark:text-white"
            >
                <a
                    href="{{ $project->url }}"
                    target="_blank"
                    class="hover:text-indigo-500"
                >
                    {{ $project->name }}
                </a>
            </h3>
            <p class="col-span-2 text-sm text-gray-500 dark:text-gray-300">
                {{ $project->summary }}
            </p>
            <a
                href="{{ $project->url }}"
                target="_blank"
                class="mt-2 inline-flex items-center self-end text-sm font-light text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200"
            >
                {{ $project->domain_name }}
                <x-heroicon-s-arrow-top-right-on-square
                    class="ml-1 h-3 w-3 fill-current"
                />
            </a>
        @else
            <h3
                class="col-span-2 text-lg font-medium tracking-wide dark:text-white"
            >
                {{ $project->name }}
            </h3>
            <p class="col-span-2 text-sm dark:text-gray-300">
                {{ $project->summary }}
            </p>
        @endif

        <ul class="inline-flex justify-end space-x-2 self-end">
            @foreach ($project->socials ?? [] as $service => $serviceUrl)
                <li>
                    <a
                        href="{{ $serviceUrl }}"
                        target="_blank"
                        title="{{ ucfirst($service) }}"
                        class="text-gray-400 hover:text-indigo-500 dark:text-gray-500"
                    >
                        @svg($service, 'w-4 h-4 fill-current')
                        <span class="sr-only">{{ ucfirst($service) }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
