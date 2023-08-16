<x-app-layout>
    <article class="max-w-3xl px-4 lg:px-0 mx-auto">
        @if ($post->image)
            <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="object-contain mt-6" />
        @endif

        {{-- Top Navigation --}}
        <nav class="my-6">
            <ul class="flex items-center gap-2 text-gray-700 dark:text-gray-400">
                <li>
                    <a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600">Home</a>
                </li>
                <li class="opacity-40">//</li>
                <li>
                    {{ $post->title }}
                </li>
            </ul>
        </nav>
    
        {{-- Header --}}
        <h1 class="font-light text-3xl mb-2">{{ $post->title }}</h1>
        <ul class="inline-flex items-center gap-2">
            <li>
                <img src="https://www.gravatar.com/avatar/{{ md5($post->user->email) }}?s=192" alt="{{ $post->user->name }}" class="w-8 h-8 rounded-full" />
            </li>
            <li>
                {{ $post->user->name }}
            </li>
            <li class="opacity-40">//</li>
            <li>
                Posted {{ $post->created_at->toFormattedDayDateString() }}
            </li>
        </ul>

        {{-- Content --}}
        <div class="post-content mt-4">
            {!! $post->rendered_content !!}
        </div>
    </article>
</x-app-layout>