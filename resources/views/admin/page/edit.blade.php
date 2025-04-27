@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Edit Page</h1>

    <form action="{{ route('admin.page.update', $page->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow space-y-6">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" value="{{ $page->title }}" class="mt-1 block w-full border-gray-300 rounded shadow-sm" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Slug</label>
            <input type="text" name="slug" value="{{ $page->title }}" class="mt-1 block w-full border-gray-300 rounded shadow-sm" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Content</label>
            <textarea name="content" rows="4" class="mt-1 block w-full border-gray-300 rounded shadow-sm">{{ $page->content }}</textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status" class="mt-1 block w-full border-gray-300 rounded shadow-sm" required>
            <option value="1" {{ $page->status == 1 ? 'selected' : '' }}>Active</option>
            <option value="0" {{$page->status== 0 ? 'selected' : ''}}> Deactive</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Menu Order</label>
            <input type="text" name="menu_order" value="{{ $page->menu_order }}" class="mt-1 block w-full border-gray-300 rounded shadow-sm" required>
        </div>

        <button type="submit" class="bg-blue-600 hover:bg-blue-700  font-semibold px-6 py-2 rounded-lg shadow-md transition duration-300 ease-in-out">
            Update Page
        </button>

    </form>
</div>
@endsection
