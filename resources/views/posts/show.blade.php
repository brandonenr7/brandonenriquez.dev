<x-app-layout>
    <article class="max-w-3xl px-4 lg:px-0 mx-auto">
        @if ($post->image)
            <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" class="object-contain mt-6" />
        @endif

        {{-- Top Navigation --}}
        <x-posts::breadcrumbs class="my-6">
            <x-posts::breadcrumb-item>{{ $post->title }}</x-posts::breadcrumb-item>
        </x-posts::breadcrumbs>
    
        {{-- Header --}}
        <h1 class="text-4xl mb-2">{{ $post->title }}</h1>
        <x-posts::meta-details :user="$post->user" :timestamp="$post->created_at" />

        {{-- Content --}}
        <div class="prose dark:prose-invert mt-4">
            {!! $post->rendered_content !!}
        </div>
    </article>
</x-app-layout>