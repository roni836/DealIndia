@extends('Admin.adminBase')
@section('title', 'setting')
@section('content')
<h1>manage Logo</h1>
<div class="overflow-hidden bg-white shadow sm:rounded-lg">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-900">
                    Title
                </th>
                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-900">
                    Logo
                </th>
                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-gray-900">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($logos as $logo)
                <tr>
                    <td class="px-6 py-4 text-sm text-gray-900">{{ $logo->title }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                        <img src="{{ asset('storage/' . $logo->logo_path) }}" alt="{{ $logo->title }}" class="w-20 h-20 object-cover rounded-md">
                    </td>
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                        <a href="{{ route('logos.edit', $logo->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        |
                        <form action="{{ route('logos.destroy', $logo->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this logo?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
