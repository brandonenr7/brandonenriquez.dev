<x-app-layout>
    <div class="max-w-3xl pt-6 md:pt-12 px-4 lg:px-0 mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-center">
            <img src="{{ Vite::asset('resources/img/profile-image.jpg') }}" alt="" class="self-center rounded-full w-32 sm:w-48" />
            <div class="mt-6 sm:mt-0 sm:ml-10">
                <h1 class="font-medium tracking-wider text-4xl sm:text-5xl">Brandon Enriquez</h1>
                <p class="font-light text-lg text-gray-600 dark:text-gray-400 mb-4">This is my website, hello and welcome!</p>
                <p>
                    You've made it to my personal website, thanks for coming to learn a little bit more about me. There
                    is a lot to learn about me, but I'll try to keep it short and sweet. I'm a software developer, and
                    I've been working freely as one since I was a teenager. Over the time I have built a lot of
                    knowledge that I would like to share with others, and I hope to do that through this website.
                </p>
            </div>
        </div>

        @if ($posts->onFirstPage())
            <h2 class="font-medium tracking-wide text-3xl mt-12 mb-2">A Little Bit About Me</h2>
            <p>
                Beyond the world of code, I find myself immersed in the vibrant realm of music as a private events DJ. This
                creative outlet not only allows me to curate unforgettable experiences but also resonates deeply with my
                inherent drive to create and innovate. Despite my diverse interests, programming has always held a special
                place in my heart. The logic, creativity, and problem-solving it demands mirror the very core of who I am.
                Welcome to my portfolio, where my journey as a developer and artist unfolds, one line of code and beat at a
                time.
            </p>

            <h2 class="font-medium tracking-wide text-3xl mt-12 mb-2">Current Projects</h2>
            <p class="mb-4">
                I'm currently working on a couple projects, but I am most excited to release a service that is available for
                DJs to help facility song requests at events, and better facilitate music playlists. This will be my first
                SaaS product, and I'm excited to see how it goes.
            </p>
            <div class="grid md:grid-cols-2 gap-4">
                @foreach ($projects as $project)
                    <livewire:project-card :project="$project" />
                @endforeach
            </div>

            <h2 class="font-medium tracking-wide text-3xl mt-12 mb-2">What to Expect Next?</h2>
            <p class="mb-4">
                So I have this website, and it is still in the early stages of development. I have a lot of ideas for what I
                want to do with it, but I've decided I want to take a different approach.  My website is an opportunity for
                me to learn new things, and I want to take advantage of that.  I'm going to be building out this website
                using Laravel, and I'm going to be using Tailwind CSS for the styling.  However whereas in the past I would
                have used Vue.js front the frontend, I am instead using Laravel Livewire.  I'm excited to see how this
                turns out.  To share my experience with others, I will be writing blog posts about my experiences building
                this website, but also about other things I learn along the way.
            </p>
            <p class="mb-4">
                I have also decided to share the entire code of my website as open-source on GitHub.  I will be sharing the
                repository publicly, however I am not going to be accepting pull requests.  I want to keep this website as
                my own, and I want to be able to make changes to it as I see fit.  I want it to be based on my code from
                the experiences and the skills I have learned.
            </p>
            <a
                href="https://github.com/brandonenr7/brandonenriquez.dev"
                target="_blank"
                class="inline-flex items-center bg-indigo-600 hover:bg-indigo-700 text-indigo-50 rounded px-3 py-2"
            >
                <x-icon-github class="h-5 w-5 fill-current mr-2" />
                <span>View GitHub Repository</span>
            </a>
        @endif

        <h2 class="font-medium tracking-wide text-3xl mt-12 mb-2">Latest Posts</h2>
        <div class="grid md:grid-cols-2 gap-4">
            @foreach ($posts as $post)
                <div class="bg-white dark:bg-gray-800 rounded shadow overflow-hidden">
                        <a href="{{ route('posts.show', $post) }}" class="block">
                            <img src="{{ asset($post->image) ?? Vite::asset('resources/img/post-banner-default.png') }}" alt="{{ $post->title }}" class="object-cover">
                        </a>
                    <div class="flex flex-col gap-2 p-4">
                        <a href="{{ route('posts.show', $post) }}" class="font-semibold text-lg hover:text-indigo-500">
                            {{ $post->title }}
                        </a>
                        <p class="text-sm dark:text-gray-400">
                            {{ $post->teaser }}
                        </p>
                    </div>
                </div>
            @endforeach
            @if ($posts->hasPages())
                <div class="w-full mt-8">
                    {{ $posts->links() }}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>