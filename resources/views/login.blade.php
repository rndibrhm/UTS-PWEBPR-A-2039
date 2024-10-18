@extends('components.app')

@section('title', 'Login')
@section('content')
<div class="mt-16 sm:mx-auto sm:w-full sm:max-w-md ">
    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
        <adiv class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Sign in to your account
            </h2>
        </adiv>

        <form action="{{route('Contact/Mahasiswa')}}" method="" class="space-y-6">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <div class="mt-1">
                    <input id="email" name="email" type="email" required class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <div class="mt-1">
                    <input id="password" name="password" type="password" required class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
            </div>

            <div>
                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Sign in
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm text-gray-600">
            Don't have an account?
            <a href="/register" class="font-medium text-gray-800 hover:text-gray-900">
                Sign up now
            </a>
        </p>
    </div>
</div>

@endsection