<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Posts
        </h2>
    </x-slot>

    <div class="py-10">

        {{-- create post --}}

        @empty($post->count())
        <div class="px-8 mx-auto mb-6 text-center max-w-7xl">
            <p class="mb-5 text-gray-400">No Posts found</p>

                    @can('post.create')
                    <div class="px-8 mx-auto mb-6 max-w-7xl">
                        <a href="{{ route('post.create') }}" class="px-6 py-2 font-bold text-white bg-blue-700 rounded hover:bg-blue-900 ">Create Post</a>
                    </div>
                     @endcan
        </div>

        @else
            @can('post.create')
                <div class="px-8 mx-auto mb-6 max-w-7xl">
                    <a href="{{ route('post.create') }}" class="px-6 py-2 font-bold text-white bg-blue-700 rounded hover:bg-blue-900 ">Create Post</a>
                </div>
            @endcan
        @endempty


        @foreach ($post as $post )

        <x-post-component :post="$post" />

        @endforeach
    </div>
</x-app-layout>
