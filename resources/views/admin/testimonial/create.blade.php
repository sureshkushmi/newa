@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10 px-6 bg-white shadow-md rounded-lg">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Add New Testimonial</h1>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.testimonial.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" class="mt-1 block w-full border border-gray-300 rounded p-2" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Designation</label>
            <input type="text" name="designation" class="mt-1 block w-full border border-gray-300 rounded p-2" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Company</label>
            <input type="text" name="company" class="mt-1 block w-full border border-gray-300 rounded p-2" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Message</label>
            <textarea name="message" rows="4" class="mt-1 block w-full border border-gray-300 rounded p-2"></textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" class="mt-1 block w-full border border-gray-300 rounded p-2">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Rating</label>
            <input type="number" name="rating" class="mt-1 block w-full border border-gray-300 rounded p-2" min="1" max="5" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status" class="mt-1 block w-full border border-gray-300 rounded p-2" required>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
        <div>
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-black px-5 py-2 rounded">Submit</button>
        </div>
    </form>
</div>
@endsection
