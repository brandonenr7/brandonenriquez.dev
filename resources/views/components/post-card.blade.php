<div class="bg-white dark:bg-gray-800 rounded shadow-md">
        <a href="{{ route('posts.show', $post) }}">
            <img
                src="{{ asset('storage/'.$post->image) ?? Vite::asset('resources/img/post-banner-default.png') }}"
                alt="{{ $post->title }}"
                class="object-cover rounded-t"
            />
        </a>
    <div class="flex flex-col gap-2 p-4">
        <a href="{{ route('posts.show', $post) }}" class="font-semibold text-lg hover:text-indigo-500">
            {{ $post->title }}
        </a>
        <p class="text-sm leading-tight text-gray-500 dark:text-gray-400">
            {{ $post->teaser }}
        </p>
        <p class="uppercase text-right text-sm text-gray-400 dark:text-gray-600">
            {{ $post->created_at->format('F j, Y') }}
        </p>
    </div>
</div>