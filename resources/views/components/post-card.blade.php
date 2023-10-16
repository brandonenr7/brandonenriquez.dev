<div class="rounded bg-white shadow-md dark:bg-gray-800">
    <a href="{{ route('posts.show', $post) }}">
        <img
            src="{{ asset('storage/'.$post->image) ?? Vite::asset('resources/img/post-banner-default.png') }}"
            alt="{{ $post->title }}"
            class="rounded-t object-cover"
        />
    </a>
    <div class="flex flex-col gap-2 p-4">
        <a
            href="{{ route('posts.show', $post) }}"
            class="text-lg font-semibold hover:text-indigo-500"
        >
            {{ $post->title }}
        </a>
        <p class="text-sm leading-tight text-gray-500 dark:text-gray-400">
            {{ $post->teaser }}
        </p>
        <p
            class="text-right text-sm uppercase text-gray-400 dark:text-gray-600"
        >
            {{ $post->created_at->format('F j, Y') }}
        </p>
    </div>
</div>
