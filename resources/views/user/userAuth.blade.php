@extends('layouts.app')

@section('title', 'User Login Page')

@section('content')


<div class="min-h-screen bg-gray-100 py-8 px-4">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold text-gray-900 mb-2">User Login Page</h1>
        <p class="text-lg text-gray-600 mb-8">Total Users: <span class="font-semibold text-blue-600">{{ count($totalUser) }}</span></p>

        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="w-full">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-6 py-4 text-left font-semibold">ID</th>
                        <th class="px-6 py-4 text-left font-semibold">Name</th>
                        <th class="px-6 py-4 text-left font-semibold">Phone</th>
                        <th class="px-6 py-4 text-left font-semibold">Address</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($totalUser as $user)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 text-gray-900">{{ $user->id }}</td>
                            <td class="px-6 py-4 text-gray-900">{{ $user->Name }}</td>
                            <td class="px-6 py-4 text-gray-900">{{ $user->Phone }}</td>
                            <td class="px-6 py-4 text-gray-900">{{ $user->Address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
