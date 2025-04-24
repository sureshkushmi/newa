@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10 px-6 bg-white shadow-md rounded-lg">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Edit Testimonial</h1>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.testimonial.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" value="{{ $testimonial->name }}" class="mt-1 block w-full border border-gray-300 rounded p-2" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Designation</label>
            <input type="text" name="designation" value="{{ $testimonial->designation }}" class="mt-1 block w-full border border-gray-300 rounded p-2" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Company</label>
            <input type="text" name="company" value="{{ $testimonial->company }}" class="mt-1 block w-full border border-gray-300 rounded p-2" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Message</label>
            <textarea name="message" rows="4" class="mt-1 block w-full border border-gray-300 rounded p-2">{{ $testimonial->message }}</textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Current Image</label><br>
            @if ($testimonial->image)
                <img src="{{ asset('storage/' . $testimonial->image) }}" class="h-20 mb-2" />
            @endif
            <input type="file" name="image" class="block w-full border border-gray-300 rounded p-2">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Rating</label>
            <input type="number" name="rating" value="{{ $testimonial->rating }}" class="mt-1 block w-full border border-gray-300 rounded p-2" min="1" max="5" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status" class="mt-1 block w-full border border-gray-300 rounded p-2" required>
                <option value="active" {{ $testimonial->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $testimonial->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <div>
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-black px-5 py-2 rounded">Update</button>
        </div>
    </form>
</div>
@endsection
