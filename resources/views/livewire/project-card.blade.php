<div class="bg-white dark:bg-gray-800 rounded shadow-lg overflow-hidden">
    @if ($project->url)
        <a href="{{ $project->url }}" target="_blank">
            <img src="{{ $project->image_url }}" alt="{{ $project->name }}" class="object-contain">
        </a>
    @else
        <img src="{{ $project->image_url }}" alt="{{ $project->name }}" class="object-contain">
    @endif

    <div class="grid grid-cols-2 gap-1 p-4">
        @if ($project->url)
            <h3 class="col-span-2 font-medium tracking-wide text-lg dark:text-white">
                <a href="{{ $project->url }}" target="_blank" class="hover:text-indigo-500">
                    {{ $project->name }}
                </a>
            </h3>
            <p class="col-span-2 text-sm text-gray-500 dark:text-gray-300">{{ $project->summary }}</p>
            <a href="{{ $project->url }}" target="_blank" class="self-end inline-flex items-center font-light text-sm text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 mt-2">
                {{ $project->domain_name }}
                <x-heroicon-s-arrow-top-right-on-square class="w-3 h-3 fill-current ml-1" />
            </a>
        @else
            <h3 class="col-span-2 font-medium tracking-wide text-lg dark:text-white">{{ $project->name }}</h3>
            <p class="col-span-2 text-sm dark:text-gray-300">{{ $project->summary }}</p>
        @endif

        <ul class="self-end inline-flex justify-end space-x-2">
            @foreach ($project->socials ?? [] as $service => $serviceUrl)
                <li>
                    <a href="{{ $serviceUrl }}" target="_blank" title="{{ ucfirst($service) }}" class="text-gray-400 dark:text-gray-500 hover:text-indigo-500">
                        @svg($service, 'w-4 h-4 fill-current')
                        <span class="sr-only">{{ ucfirst($service) }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>