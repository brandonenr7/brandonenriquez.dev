<div {{ $attributes->merge(['class' => 'flex flex-col sm:flex-row items-center gap-4']) }}>
    <img src="https://www.gravatar.com/avatar/{{ md5($user->email) }}?s=256" alt="{{ $user->name }}" class="w-32 h-32 rounded-full" />
    <div class="flex-1 flex flex-col items-center sm:items-start space-y-3">
        <h4 class="text-3xl leading-none tracking-wide">{{ $user->name }}</h4>
        <p class="text-center sm:text-left text-gray-500 dark:text-gray-400 leading-none">{{ $user->biography }}</p>
        <ul class="inline-flex items-center space-x-4 text-gray-400 dark:text-gray-600">
            @if ($user->x_url)
                <li>
                    <a href="{{ $user->x_url }}" target="_blank" class="hover:text-indigo-500">
                        <x-icon-x-twitter class="w-5 h-5 fill-current" />
                        <span class="sr-only">X/Twitter</span>
                    </a>
                </li>
            @endif
            @if ($user->github_url)
                <li>
                    <a href="{{ $user->github_url }}" target="_blank" class="hover:text-indigo-500">
                        <x-icon-github class="w-5 h-5 fill-current" />
                        <span class="sr-only">GitHub</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>