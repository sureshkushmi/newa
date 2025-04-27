@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Pages</h1>
        <a href="{{ route('admin.page.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-black px-5 py-2 rounded shadow">
        + Add New Page
        </a>


    </div>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded shadow">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">slug </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">content</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">status </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">menu_order</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($pages as $page)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800">{{ $page->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-600">{{ $page->slug }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800">{{ \Illuminate\Support\Str::limit($page->content, 100) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-600">{{ $page->status }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800">{{ $page->menu_order }}</td>
                        <td class="px-6 py-4 whitespace-nowrap space-x-2">
                            {{-- Uncomment to enable edit/delete --}}
                          
                            <a href="{{ route('admin.page.edit', $page->id) }}" class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('admin.page.destroy', $page->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete?')" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline">Delete</button>
                            </form> 
                            
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">No pages found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
