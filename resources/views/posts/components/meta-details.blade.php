<ul {{ $attributes->merge(['class' => 'flex flex-col sm:flex-row sm:items-center gap-1 sm:gap-2 pb-2 sm:pb-0 border-b dark:border-b-gray-700 sm:border-b-0']) }}>
    <li class="inline-flex items-center space-x-2">
        <img src="https://www.gravatar.com/avatar/{{ md5($user->email) }}?s=192" alt="{{ $user->name }}" class="w-8 h-8 rounded-full" />
        <span>{{ $user->name }}</span>
    </li>
    <li class="hidden sm:inline-block opacity-40">//</li>
    <li>
        Posted {{ $timestamp->toFormattedDayDateString() }}
    </li>
</ul>