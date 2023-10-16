<ul
    {{ $attributes->merge(['class' => 'flex flex-col sm:flex-row sm:items-center gap-1 sm:gap-2 pb-2 sm:pb-0 border-b dark:border-b-gray-700 sm:border-b-0']) }}
>
    <li class="inline-flex items-center space-x-2">
        <img
            src="https://www.gravatar.com/avatar/{{ md5($user->email) }}?s=192"
            alt="{{ $user->name }}"
            class="h-8 w-8 rounded-full"
        />
        <span>{{ $user->name }}</span>
    </li>
    <li class="hidden opacity-40 sm:inline-block">//</li>
    <li>Posted {{ $timestamp->toFormattedDayDateString() }}</li>
</ul>
