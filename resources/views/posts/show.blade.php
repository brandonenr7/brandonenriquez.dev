<x-app-layout
    :title="$post->title"
    :description="$post->description"
    :image="asset('storage/'.$post->image)"
>
    <article class="mx-auto max-w-3xl px-4 lg:px-0">
        @if ($post->image)
            <img
                src="{{ asset('storage/'.$post->image) }}"
                alt="{{ $post->title }}"
                class="mt-6 object-contain"
            />
        @endif

        {{-- Top Navigation --}}
        <x-posts::breadcrumbs class="my-6">
            <x-posts::breadcrumb-item>
                {{ $post->title }}
            </x-posts::breadcrumb-item>
        </x-posts::breadcrumbs>

        {{-- Header --}}
        <h1 class="mb-2 text-3xl sm:text-4xl">{{ $post->title }}</h1>
        <x-posts::meta-details
            :user="$post->user"
            :timestamp="$post->created_at"
        />

        {{-- Content --}}
        <div class="content mt-4 max-w-3xl">
            {!! $post->rendered_content !!}
        </div>

        {{-- Author Footer --}}
        <x-posts::author-footer :user="$post->user" class="mt-8" />
    </article>
</x-app-layout>
