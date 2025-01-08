<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            NEW POST
        </h2>
    </x-slot>

    <div class="p-10 mx-auto mt-10 bg-white rounded-sm shadow-sm max-w-7xl">

        <form action="{{ route('post.store') }}" method="post">

            @csrf

            <div class="mb-3">
                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Title</label>
                <input type="text" name="title" id="title" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                @error('title')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Content of the post</label>
                <textarea name="content" id="content" rows="5" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                @error('content')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex justify-between mb-3">
                <a href="{{ route('dashboard') }}" class="px-6 py-2 font-bold text-white bg-blue-700 rounded hover:bg-blue-900">Cancel</a>
                <button type="submit" class="px-6 py-2 font-bold text-white bg-blue-700 rounded hover:bg-blue-900">Create Post</button>
            </div>

        </form>

    </div>

</x-app-layout>
