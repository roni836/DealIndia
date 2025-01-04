@extends('user.userBase')
@section('title', 'Document Upload')
@section('content')


<div class="flex mt-10 bg-gray-100 min-h-screen">
    <!-- Sidebar -->
    @include('user.include.sidebar')

    <div class="flex-1 p-6">
        <!-- Display Success or Error Messages -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                {{ session('success') }}
            </div>
       
        @endif
        <div class="mx-auto bg-white p-6 rounded-lg shadow-lg mt-8 w-full lg:w-1/2">
            <h1 class="text-xl font-semibold  mb-4 text-center text-blue-600"><i class="fas fa-file-alt text-blue-600 text-xl px-2"></i> AdditionalDocument</h1>

            <form action="{{ route('additional_document') }}" method="POST" enctype="multipart/form-data" class="">
                @csrf
                @method('PUT')

                <div class="form-group mb-6">
                    <label for="name" class="block text-gray-700 font-semibold">Document Name</label>
                    <input type="text" name="name" id="name" class="mt-2 p-3 w-full border border-gray-300 rounded-lg" value="{{ old('name') }}" required>
                </div>

                <div class="form-group mb-6">
                    <label for="filename" class="block text-gray-700  font-semibold">Upload Document</label>
                    <input type="file" name="filename" id="filename" class="mt-2 p-3 w-full border border-gray-300  rounded-lg" required>
                </div>

                <button type="submit" class="bg-blue-600 text-white font-semibold p-3 rounded-lg hover:bg-blue-800 w-full">
                    Upload Document
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
