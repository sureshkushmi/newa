@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-10 px-6 bg-white shadow rounded-lg">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">All Testimonials</h1>
        <a href="{{ route('admin.testimonial.create') }}" class="bg-indigo-600 text-black px-4 py-2 rounded shadow hover:bg-indigo-700">Add New</a>
    </div>

    @if (session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full table-auto border-collapse">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">#</th>
                <th class="border px-4 py-2">Name</th>
                <th class="border px-4 py-2">Company</th>
                <th class="border px-4 py-2">Rating</th>
                <th class="border px-4 py-2">Status</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonials as $testimonial)
            <tr>
                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                <td class="border px-4 py-2">{{ $testimonial->name }}</td>
                <td class="border px-4 py-2">{{ $testimonial->company }}</td>
                <td class="border px-4 py-2">{{ $testimonial->rating }}</td>
                <td class="border px-4 py-2">{{ ucfirst($testimonial->status) }}</td>
                <td class="border px-4 py-2 flex gap-2">
                    <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}" class="text-blue-600 hover:underline">Edit</a>
                    <form action="{{ route('admin.testimonial.destroy', $testimonial->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
