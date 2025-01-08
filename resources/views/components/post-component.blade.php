<div class="mt-3">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
{{--         <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
 --}}        <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
            <div class=" {{ Auth::user()->id === $post->user_id ? "bg-blue-100" : "bg-white-100"}} p-6 text-gray-900 dark:text-gray-100">
                <div class="flex justify-between">
                    <div>
                        <span class="text-gray-500 me-3">Author:</span>
                        <span class="text-blue-600">{{ $post->user->name }}</span>
                    </div>
                    <div>
                        <span class="text-gray-500 me-3">Created at:</span>
                        <span>{{ $post->created_at }}</span>
                    </div>
                </div>

                <div class="mt-3 ps-5">
                    <h1 class="text-xl font-bold">{{ $post->title }}</h1>
                    <p class="mt-3">{{ $post->content }}</p>
                </div>


                <div class="mt-3 ps-5 text-end">
                    {{-- post delete --}}
                    @can('post.delete', $post)
                        <a href="{{ route('post.delete', ['id' => $post->id ]) }}" class="px-6 py-2 font-bold text-white bg-red-400 rounded hover:bg-red-600">Delete</a>
                    @endcan
                </div>

            </div>
        </div>
    </div>
</div>