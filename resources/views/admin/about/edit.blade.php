@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Edit Slider</h1>
    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.about.update', $about->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded shadow space-y-6">
        @csrf
        @method('PUT')
        
        <div>
            <label class="block text-sm font-medium text-gray-700">Current Image</label>
            <img src="{{ asset('storage/' . $about->image) }}" width="200" class="mb-2 rounded border">
            <input type="file" name="image" class="mt-1 block w-full border-gray-300 rounded shadow-sm">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" value="{{ $about->title }}" class="mt-1 block w-full border-gray-300 rounded shadow-sm" required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Slogan</label>
            <input type="text" name="slogan" value="{{ $about->slogan }}" class="mt-1 block w-full border-gray-300 rounded shadow-sm" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" rows="4" class="mt-1 block w-full border-gray-300 rounded shadow-sm">{{ $about->message }}</textarea>
        </div>

        <button type="submit" class="bg-blue-600 hover:bg-blue-700  font-semibold px-6 py-2 rounded-lg shadow-md transition duration-300 ease-in-out">
            Update About
        </button>

    </form>
</div>
@endsection
