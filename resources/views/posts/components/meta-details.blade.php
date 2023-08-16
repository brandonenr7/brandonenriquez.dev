<ul {{ $attributes->merge(['class' => 'inline-flex items-center gap-2']) }}>
    <li>
        <img src="https://www.gravatar.com/avatar/{{ md5($user->email) }}?s=192" alt="{{ $user->name }}" class="w-8 h-8 rounded-full" />
    </li>
    <li>
        {{ $user->name }}
    </li>
    <li class="opacity-40">//</li>
    <li>
        Posted {{ $timestamp->toFormattedDayDateString() }}
    </li>
</ul>