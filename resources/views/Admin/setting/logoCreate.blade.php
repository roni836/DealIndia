@extends('Admin.adminBase')
@section('title', 'setting')
@section('content')
<h1>Add Logo</h1>
@if ($errors->any())
                <div class="mb-4">
                    <div class="text-red-600 font-medium">Whoops! Something went wrong.</div>
                    <ul class="mt-2 text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
<form action="{{ route('logos.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-lg">
    @csrf
    <div class="mb-4">
        <label for="title" class="block text-sm font-semibold text-gray-700">Title</label>
        <input type="text" id="title" name="title" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <div class="mb-4">
        <label for="logo" class="block text-sm font-semibold text-gray-700">Logo</label>
        <input type="file" id="logo_path" name="logo_path" required class="mt-1 block w-full text-sm text-gray-700 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
    </div>
    <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">Save</button>
</form>


@endsection
