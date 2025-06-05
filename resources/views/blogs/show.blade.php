<x-app-layout>
    <x-slot name="title">{{ $blog->title }}</x-slot>

    <div class="container mx-auto px-4 py-8">
        <article class="bg-white rounded-lg shadow overflow-hidden">
            @if($blog->thumbnail)
                <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->title }}" class="w-full h-64 object-cover">
            @endif

            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h1 class="text-3xl font-bold">{{ $blog->title }}</h1>
                    @if($blog->published_at)
                        <span class="text-sm text-gray-500">
                            Published: {{ $blog->published_at->format('M d, Y') }}
                        </span>
                    @else
                        <span class="text-sm text-gray-500">Draft</span>
                    @endif
                </div>

                <div class="prose max-w-none">
                    {!! $blog->content !!}
                </div>
            </div>
        </article>

        <div class="mt-6 flex justify-end">
            <a href="{{ route('blogs.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md">
                Back to Blog Posts
            </a>
        </div>
    </div>

    @if($blog->scripts)
        {!! $blog->scripts !!}
    @endif
</x-app-layout>
