@extends('auth.layout.formStructure')
@section('content')
<div class="sm:mx-auto sm:w-full sm:max-w-md">
    <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-2 tracking-tight">Create an Account</h2>
    <p class="text-sm text-center text-gray-500 mb-8">Join us today! It only takes a few minutes.</p>
</div>

<form action="{{ route('register') }}" method="POST" class="space-y-5">
    @csrf

    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Full Name</label>
        <input type="text" name="name" value="{{ old('name') }}" required
            class="w-full px-4 py-2.5 border @error('name') border-red-400 focus:ring-red-100 focus:border-red-500 @else border-gray-300 focus:ring-blue-100 focus:border-blue-500 @enderror rounded-xl focus:ring-4 focus:outline-none transition duration-200 text-gray-900 placeholder-gray-400"
            placeholder="John Doe">
        @error("name")
            <p class="text-xs font-medium text-red-600 mt-1.5 flex items-center gap-1">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                {{$message}}
            </p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Email Address</label>
        <input type="email" name="email" value="{{ old('email') }}" required
            class="w-full px-4 py-2.5 border @error('email') border-red-400 focus:ring-red-100 focus:border-red-500 @else border-gray-300 focus:ring-blue-100 focus:border-blue-500 @enderror rounded-xl focus:ring-4 focus:outline-none transition duration-200 text-gray-900 placeholder-gray-400"
            placeholder="you@example.com">
        @error("email")
            <p class="text-xs font-medium text-red-600 mt-1.5 flex items-center gap-1">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                {{$message}}
            </p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Password</label>
        <input type="password" name="password" required
            class="w-full px-4 py-2.5 border @error('password') border-red-400 focus:ring-red-100 focus:border-red-500 @else border-gray-300 focus:ring-blue-100 focus:border-blue-500 @enderror rounded-xl focus:ring-4 focus:outline-none transition duration-200 text-gray-900"
            placeholder="••••••••">
        @error("password")
            <p class="text-xs font-medium text-red-600 mt-1.5 flex items-center gap-1">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                {{$message}}
            </p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Confirm Password</label>
        <input type="password" name="password_confirmation" required
            class="w-full px-4 py-2.5 border @error('password_confirmation') border-red-400 focus:ring-red-100 focus:border-red-500 @else border-gray-300 focus:ring-blue-100 focus:border-blue-500 @enderror rounded-xl focus:ring-4 focus:outline-none transition duration-200 text-gray-900"
            placeholder="••••••••">
        @error("password_confirmation")
            <p class="text-xs font-medium text-red-600 mt-1.5 flex items-center gap-1">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                {{$message}}
            </p>
        @enderror
    </div>

    <button type="submit"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl shadow-sm hover:shadow transition duration-200 focus:ring-4 focus:ring-blue-100 focus:outline-none mt-2">
        Register
    </button>
</form>

<p class="text-sm text-center text-gray-600 mt-8">
    Already have an account? <a href="{{route('login.page')}}" class="text-blue-600 hover:text-blue-700 hover:underline font-semibold transition">Sign in</a>
</p>
@endsection
