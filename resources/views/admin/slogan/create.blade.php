@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10 px-6 bg-white shadow-md rounded-lg">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Add New Slogan</h1>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.slogan.store') }}" method="POST"  class="space-y-6">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" class="mt-1 block w-full border border-gray-300 rounded p-2 shadow-sm focus:ring focus:ring-blue-300" required>
        </div>
        <div>
            <!-- For the form submit button -->
<button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-black px-5 py-2 rounded shadow">
    Submit
</button>

        </div>
    </form>
</div>
@endsection
